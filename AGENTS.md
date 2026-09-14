# 作業方針

最初にREADME.md、Windows引き継ぎ.md、WordPress反映手順.mdを読む。
対象は既存の https://kodoaso.votreinc.jp/ 。作業開始時に本番の現在状態を照合する。

- 01 MARKET、02 EVENT、03 BRAND EXPERIENCEを維持する。
- MARKETは無料マーケットと子育て世帯との関係の基盤。
- サマーバブル、こどあそフェス、ナイトバブルはEVENTに含める。
- BRAND EXPERIENCEの企業案件実績はまだない。架空の事例、ロゴ、成果数値を追加しない。
- 企業向け導線は体験→LINE登録・Instagramフォロー→継続接点→来店。
- 問い合わせ先や事実を推測せず確認する。Instagram投稿本文は未確認。
- HTMLとWordPressテンプレートは別ファイル。変更時に両方の整合性を確認する。
- GitHub保存と本番公開を混同しない。Windows側の変更を上書きしない。
- 認証情報、wp-config.php、DB、バックアップ、.openai等をコミットしない。
- 子テーマを変更した場合はbuild_theme.pyでZIPを再生成する。
- 本番反映前にWeb/DB復旧方法、既存ページへの影響、フォーム、SEO出力を確認する。
