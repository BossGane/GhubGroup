# VOTRE-KODOASO

こどあそマーケットのサイト制作・Windows引き継ぎ用ソースです。
対象サイト：https://kodoaso.votreinc.jp/

## Windowsでの再開

1. このリポジトリをGitHub DesktopでClone、またはCode → Download ZIPで取得して解凍します。
2. 「Windows引き継ぎ.md」で最後に確認した状態と未完了項目を読みます。
3. Codexで取得したフォルダを開き、引き継ぎ文書を参照して続行します。
4. 画像版は `kodoaso-photo-seo.html` をブラウザで開けます。動画版は下記HTTPプレビューで確認します。

Python 3が利用できるWindowsでは、フォルダ内のPowerShellで実行します。

```powershell
py -m http.server 8765 --bind 127.0.0.1
```

画像版：http://127.0.0.1:8765/kodoaso-photo-seo.html
動画版：http://127.0.0.1:8765/kodoaso-video-seo.html
終了はCtrl+C。素材とYouTubeにはインターネット接続が必要です。

## WordPress用ZIP

```powershell
py build_theme.py
```

`dist/kodoaso-photo-child.zip` を生成します。導入は「WordPress反映手順.md」を参照してください。静的HTML全体をWordPress本文へ貼り付ける方式ではありません。

## 現状

- 画像版・動画版の単独HTML、画像版WordPress子テーマを収録。
- 子テーマは本番へインストール済み・未有効化（2026-09-14に最後に確認した状態）。
- 問い合わせ接続、WordPress側SEO統合、実環境での表示確認、企業向け専用ページは未完了。
- 単独HTMLのSEO情報はWordPressへ自動反映されません。
- GitHubへの保存だけではConoHaやWordPressには反映されません。自動デプロイはありません。
- 写真は既存WordPressのURL参照です。画像本体・DB・ログイン情報は含みません。

`website-creation/` は汎用制作スキルです。個別方針はAGENTS.mdと引き継ぎ文書を優先します。

## GitからWindowsへ引き継ぐ

GitとPython 3を準備し、PowerShellで実行します。PrivateリポジトリのためGitHubの認証画面が出たらBossGaneでログインしてください。

```powershell
New-Item -ItemType Directory -Force I:\CODEX\projects | Out-Null
Set-Location I:\CODEX\projects
git clone https://github.com/BossGane/VOTRE-KODOASO.git
Set-Location VOTRE-KODOASO
git config user.name "BossGane"
git config user.email "ganecloudgt@gmail.com"
py -m http.server 8765 --bind 127.0.0.1
```

すでにclone済みの場合は再cloneせず、作業フォルダで `git status` を確認し、未コミット変更を保全した上で `git pull --ff-only` を実行します。
ソース直接管理版がpushされた後はZIPの解凍は不要です。ルートのHTML、子テーマ、制作スキルを直接使用します。

既存のルートZIPは以前の引き継ぎスナップショットとして保存しています。最新の子テーマZIPは `py build_theme.py` で生成してください。
