# VOTRE-KODOASO

こどあそマーケット制作・Windows引き継ぎ用リポジトリ。
本番対象：https://kodoaso.votreinc.jp/

## Windowsで開始

1. `VOTRE-KODOASO-transfer.zip` をダウンロードして解凍します。
2. 解凍した `VOTRE-KODOASO` フォルダを開きます。子テーマのソース、制作スキル、ビルド用Python、手順書を含みます。
3. `Windows引き継ぎ.md` を読んでから作業を再開してください。

GitHubのCode → Download ZIPで全体を取得した場合も、中の `VOTRE-KODOASO-transfer.zip` を解凍してください。
ルートのHTMLと手順書は閲覧用にも置いています。今後の編集は解凍したソースを使用し、変更をGitで管理してください。

## 収録内容

- `kodoaso-photo-seo.html`：画像版プレビュー
- `kodoaso-video-seo.html`：YouTube動画版プレビュー
- `kodoaso-photo-child.zip`：WordPressへインストールする子テーマ
- `VOTRE-KODOASO-transfer.zip`：上記を含むソース・スキル・手順の完全版
- `Windows引き継ぎ.md`：最後の確認状態と次の作業
- `WordPress反映手順.md`：導入・公開・復旧手順

動画確認はPython 3導入済みの環境で、解凍フォルダ内から `py -m http.server 8765 --bind 127.0.0.1` を実行し、http://127.0.0.1:8765/kodoaso-video-seo.html を開きます。

## 未完了事項

子テーマはインストール済み・未有効化（2026-09-14の最終確認）。問い合わせ接続、WordPress側のSEO統合、実環境での検証、企業向け専用ページは未完了です。単独HTMLのSEO情報はWordPressへ自動反映されません。

GitHub保存による本番自動更新はありません。認証情報・DB・写真本体は含みません。写真は既存サイトのURL参照です。
