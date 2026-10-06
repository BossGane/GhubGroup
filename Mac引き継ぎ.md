# VOTRE-KODOASO Mac引き継ぎ手順

更新：2026-10-06

この文書は、Windowsで進めたKODOASOサイト制作をMacへ引き継ぎ、同じGitHubリポジトリを使って作業を続けるための手順です。

## 基本ルール

- 最新データの保管場所はGitHubです。
- リポジトリ：<https://github.com/BossGane/GhubGroup>
- 公開サイト：<https://bossgane.github.io/GhubGroup/>
- WindowsとMacで同時に編集しません。
- 作業を始める前にGitHubから最新版を取得し、作業終了時にGitHubへ保存します。
- `I:\` から始まるWindowsのパスはMacでは使えません。サイトで使う画像は、必ずリポジトリ内へ保存してから公開します。
- GitHubへ保存しただけではWordPressやConoHaには反映されません。GitHub Pagesの静的ページだけが更新されます。

## Macで最初に一度だけ行う準備

### 1. 必要なアプリを用意する

- Codexデスクトップアプリ
- GitHub Desktop
- Python 3

GitHub Desktopでは、Windowsで使用しているBossGaneのGitHubアカウントへログインします。パスワードやアクセストークンを文書やチャットへ貼り付けないでください。

### 2. GitHubからMacへ取得する

GitHub Desktopを開き、次の順で操作します。

1. `File` → `Clone Repository...`
2. `URL` タブを選択
3. Repository URLへ次を入力

```text
https://github.com/BossGane/GhubGroup.git
```

4. Local Pathは、例として次の場所を指定

```text
~/Documents/CODEX/projects/GhubGroup
```

5. `Clone` を押す

すでに同じリポジトリをMacへCloneしている場合は、再度Cloneしません。既存フォルダをGitHub Desktopで開き、`Fetch origin`を実行します。

### 3. Codexでフォルダを開く

Codexで次のフォルダをプロジェクトとして開きます。

```text
~/Documents/CODEX/projects/GhubGroup
```

最初の依頼として、次の文章をそのまま使用できます。

```text
このKODOASOサイトをMacで引き継ぎます。
最初にAGENTS.md、README.md、Mac引き継ぎ.mdを読んでください。
次にgit statusと現在のブランチを確認し、未コミットの変更があれば勝手に消さずに報告してください。
作業はまずローカルで進め、私が指示するまでGitHubへ公開しないでください。
```

## ローカルサイトを表示する

Codexのターミナル、またはMacのターミナルでリポジトリへ移動します。

```bash
cd ~/Documents/CODEX/projects/GhubGroup
python3 -m http.server 8787 --bind 127.0.0.1
```

こどあそFESページ：

<http://127.0.0.1:8787/events/kodomoaso-fes-2026/>

トップページ：

<http://127.0.0.1:8787/homepage-preview.html>

サーバーを終了するときは、起動したターミナルで `Control + C` を押します。

## Macで毎回作業を始める手順

1. Windows側の作業が終了し、GitHubへ公開済みであることを確認します。
2. GitHub Desktopで対象リポジトリを開きます。
3. `Fetch origin`を押し、更新があれば`Pull origin`を押します。
4. Codexでリポジトリを開きます。
5. `git status`で未保存の変更がないか確認します。
6. ローカルサーバーを起動し、ブラウザで表示を確認します。

ターミナルで行う場合は次のとおりです。

```bash
cd ~/Documents/CODEX/projects/GhubGroup
git status
git pull --ff-only origin main
python3 -m http.server 8787 --bind 127.0.0.1
```

`git status`で変更が表示された場合は、先にCodexへ内容を確認させてください。未コミット変更がある状態で安易にPullや削除をしません。

## 作業終了とGitHub公開

作業中はローカルだけで確認します。クライアント確認や公開のタイミングで、Codexへ次のように依頼します。

```text
現在の変更を確認し、表示テストを行ってください。
問題がなければ変更内容が分かるコミットを作成し、mainへpushしてください。
その後、GitHub Pagesの公開ページへ反映されたことも確認してください。
```

公開後はGitHub Desktopで`No local changes`になっていることを確認します。MacからWindowsへ戻るときも、Mac側の変更を先にGitHubへPushしてからWindowsでPullします。

## よくあるトラブル

### 127.0.0.1への接続が拒否される

ローカルサーバーが起動していません。リポジトリのフォルダで次を実行します。

```bash
python3 -m http.server 8787 --bind 127.0.0.1
```

### 8787ポートが使用中と表示される

別の番号で起動します。

```bash
python3 -m http.server 8788 --bind 127.0.0.1
```

この場合の確認URLは `http://127.0.0.1:8788/` です。

### GitHub Pagesへすぐ反映されない

Push後、公開まで数十秒から数分かかる場合があります。少し待ってから再読み込みします。ブラウザのキャッシュが残る場合は、URL末尾に `?v=コミット番号` を付けて確認します。

### Windowsでは見える画像がMacや公開ページで見えない

- `C:\` や `I:\` など端末内の絶対パスをHTMLへ書いていないか確認します。
- 画像がリポジトリ内へ保存されているか確認します。
- HTMLと実際のファイル名で、大文字・小文字が一致しているか確認します。

### WindowsとMacの変更がぶつかった

どちらか一方で未公開の変更が残っています。ファイルを削除したり強制的に上書きせず、両方の `git status` をCodexへ見せて整理します。

## 引き継ぎ時に読むファイル

1. `AGENTS.md`：制作時に守る方針と、こどあそフェスの中心思想
2. `README.md`：リポジトリ全体の概要と起動方法
3. `Mac引き継ぎ.md`：Macでの開始・終了手順
4. `Windows引き継ぎ.md`：WordPress・ConoHaを含む過去の作業状態
5. `WordPress反映手順.md`：WordPressへ反映する場合だけ参照
