# 作品一覧をDB化してHerokuへ再デプロイする手順

## 1. 変更した主なファイル

- `app/Http/Controllers/HomeController.php`
  - トップページ表示時に `projects` / `tags` / `project_details` をDBから取得
- `app/Http/Controllers/ProjectController.php`
  - 詳細ページと詳細APIをDB取得に変更
- `app/Models/Project.php`
  - `title` をfillableに追加、SoftDeletes対応
- `resources/views/projects-partial.blade.php`
  - ベタ打ち配列を削除し、DBから渡された `$projects` / `$tags` で表示
- `resources/views/projects/project-modal.blade.php`
  - 作品ごとの専用モーダルではなく、DBデータから共通モーダルを生成
- `database/sql/portfolio_seed.sql`
  - 初期作品データ投入用SQL

## 2. テーブル設計

既存のマイグレーションを活かします。

### projects
作品の基本情報。

- id
- title
- main_image
- introduction
- date
- like_count
- url
- created_at / updated_at / deleted_at

### project_details
作品モーダル内に出すサブ画像・説明。

- id
- order
- project_id
- sub_title
- content
- image
- video_url
- created_at / updated_at / deleted_at

### tags
タグ。

- id
- name
- category_id

### project_tag
作品とタグの中間テーブル。

- project_id
- tag_id

## 3. Heroku側DBにテーブル作成

HerokuでDB接続情報を確認します。

```bash
heroku config:get JAWSDB_URL --app アプリ名
```

WorkbenchでJawsDBに接続し、該当DBを選択してから、まずLaravelのマイグレーションをHeroku上で実行します。

```bash
heroku run php artisan migrate --app アプリ名
```

## 4. 初期作品データ投入

WorkbenchでHerokuのDBを選択した状態で、次のSQLを実行します。

```text
database/sql/portfolio_seed.sql
```

実行後、確認します。

```sql
SHOW TABLES;
SELECT * FROM projects;
SELECT * FROM project_details;
SELECT * FROM tags;
```

## 5. GitHubとHerokuに反映

```bash
git add .
git commit -m "Use database for portfolio projects"
git push origin main
git push heroku main
```

## 6. Herokuでキャッシュを消す

```bash
heroku run php artisan optimize:clear --app アプリ名
heroku open --app アプリ名
```

## 7. 今後作品を追加するとき

画像ファイルを `public/images` に追加し、DBに以下を追加します。

1. `projects` に作品基本情報をINSERT
2. `project_details` にサブ画像・説明をINSERT
3. `project_tag` にタグとの紐づけをINSERT

これでBladeファイルを触らずに作品カードとモーダルが増えます。
