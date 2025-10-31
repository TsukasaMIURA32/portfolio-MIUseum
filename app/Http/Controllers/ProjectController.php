<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * プロジェクトの詳細ページを表示
     */
    public function show($id)
    {
        // 🔹 本来DBから取るデータを配列で定義
        $projects = [
            1 => [
                'id' => 1,
                'title' => 'HopQuest - 旅行SNSアプリ',
                'like_count' => 42,
                'introduction' => "旅行先で見つけたスポットを共有できるSNSです。\nLaravelとMySQLを使用し、チーム開発で制作しました。",
                'url' => 'https://hopquest-demo.herokuapp.com',
                'details' => [
                    [
                        'sub_title' => 'トップページ',
                        'content' => "新着スポットとクエストをカード形式で表示。",
                        'image' => 'images/hopquest-main.png',
                        'video_url' => null,
                    ],
                    [
                        'sub_title' => 'スポット登録機能',
                        'content' => "ユーザーが旅行先の情報を登録可能。",
                        'image' => 'images/hopquest-spot.png',
                        'video_url' => 'https://www.youtube.com/watch?v=XXXXXXX',
                    ],
                ],
            ],
            2 => [
                'id' => 2,
                'title' => '神経衰弱ゲーム',
                'like_count' => 30,
                'introduction' => "JavaScript講習の最終課題として制作。カードのシャッフルや一致判定など、ロジック重視の構成です。",
                'url' => 'https://memorygame-demo.vercel.app',
                'details' => [
                    [
                        'sub_title' => 'プレイ画面',
                        'content' => "カードをクリックしてペアを揃えるシンプルなゲーム。",
                        'image' => 'images/memorygame-main.png',
                        'video_url' => 'https://www.youtube.com/watch?v=YYYYYYY',
                    ],
                ],
            ],
        ];

        // 該当IDのプロジェクトを取得
        $project = $projects[$id] ?? null;

        if (!$project) {
            abort(404, 'Project not found');
        }

        return view('projects.show', compact('project'));
    }

    /**
     * 疑似いいね機能（実際は動かないがエラー回避）
     */
    public function like($id)
    {
        return response()->json([
            'like_count' => '∞' // ダミー
        ]);
    }

    /**
     * 詳細データを返すAPI（JS用）
     */
    public function details($id)
    {
        $data = [
            'title' => 'HopQuest',
            'details' => [
                ['sub_title' => '紹介1', 'content' => '説明1'],
                ['sub_title' => '紹介2', 'content' => '説明2'],
            ],
        ];

        return response()->json($data);
    }
}
