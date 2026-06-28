-- Heroku / JawsDB に初期作品データを入れるSQL
-- WorkbenchでDBを選択してから、このSQLを実行してください。

INSERT INTO categories (id, name, created_at, updated_at) VALUES
  (1, 'Frontend', NOW(), NOW()),
  (2, 'Backend', NOW(), NOW()),
  (3, 'Database', NOW(), NOW()),
  (4, 'Design', NOW(), NOW()),
  (5, 'Tools', NOW(), NOW()),
  (6, 'Framework', NOW(), NOW())
ON DUPLICATE KEY UPDATE name = VALUES(name), updated_at = NOW();

INSERT INTO tags (id, name, category_id, created_at, updated_at) VALUES
  (1, 'HTML/CSS', 1, NOW(), NOW()),
  (2, 'JavaScript', 1, NOW(), NOW()),
  (3, 'PHP/Laravel', 2, NOW(), NOW()),
  (4, 'Java', 2, NOW(), NOW()),
  (5, 'MySQL', 3, NOW(), NOW()),
  (6, 'Figma', 4, NOW(), NOW()),
  (7, 'GitHub', 5, NOW(), NOW()),
  (8, 'Team Project', 5, NOW(), NOW()),
  (9, 'Bootstrap', 6, NOW(), NOW()),
  (10, 'jQuery', 1, NOW(), NOW()),
  (11, 'Webデザイン', 4, NOW(), NOW())
ON DUPLICATE KEY UPDATE name = VALUES(name), category_id = VALUES(category_id), updated_at = NOW();

INSERT INTO projects (id, title, main_image, introduction, date, like_count, url, created_at, updated_at) VALUES
  (1, 'HopQuest - 旅行SNSアプリ', 'images/HopQuest.png', '旅行先で見つけたスポットを共有できるSNSです。LaravelとMySQLを使用し、チーム開発で制作しました。', '2025-08-01', 42, 'https://hopquest-demo.herokuapp.com', NOW(), NOW()),
  (2, 'JavaScript神経衰弱ゲーム', 'images/memorygame.png', 'JavaScript講習の最終課題として制作。カードのシャッフルや一致判定など、ロジック重視の構成です。', '2025-07-01', 30, 'https://memorygame-demo.vercel.app', NOW(), NOW()),
  (3, 'COFFEE SHOP ONLINE', 'images/coffee-bean.png', '架空のコーヒーショップサイトです。配色や余白、カード配置など、見やすいWebデザインを意識して制作しました。', '2025-06-01', 18, '', NOW(), NOW())
ON DUPLICATE KEY UPDATE
  title = VALUES(title),
  main_image = VALUES(main_image),
  introduction = VALUES(introduction),
  date = VALUES(date),
  like_count = VALUES(like_count),
  url = VALUES(url),
  updated_at = NOW();

INSERT INTO project_details (id, `order`, project_id, sub_title, content, image, video_url, created_at, updated_at) VALUES
  (1, 1, 1, 'トップページ', '新着スポットとクエストをカード形式で表示します。旅行計画を探す楽しさが伝わるように、視覚的な見せ方を意識しました。', 'images/HopQuest.png', NULL, NOW(), NOW()),
  (2, 2, 1, 'Figma設計', 'チーム開発に入る前に画面構成を整理し、実装時に迷わないようにFigmaで設計しました。', 'images/HopQuest-Figma.png', NULL, NOW(), NOW()),
  (3, 1, 2, 'プレイ画面', 'カードをクリックしてペアを揃えるシンプルなゲームです。シャッフル処理や一致判定、ゲーム終了判定をJavaScriptで実装しました。', 'images/memory-game1.png', 'https://www.youtube.com/watch?v=37EVdRZoI_Q', NOW(), NOW()),
  (4, 1, 3, 'トップページ', 'カフェサイトらしい温かみを意識しつつ、商品が見やすいカードレイアウトで構成しました。', 'images/coffee-bean.png', 'https://www.youtube.com/watch?v=C1jfgmH_abE', NOW(), NOW())
ON DUPLICATE KEY UPDATE
  `order` = VALUES(`order`),
  project_id = VALUES(project_id),
  sub_title = VALUES(sub_title),
  content = VALUES(content),
  image = VALUES(image),
  video_url = VALUES(video_url),
  updated_at = NOW();

INSERT IGNORE INTO project_tag (project_id, tag_id) VALUES
  (1, 1), (1, 2), (1, 3), (1, 5), (1, 6), (1, 8),
  (2, 1), (2, 2), (2, 10),
  (3, 1), (3, 9), (3, 11);
