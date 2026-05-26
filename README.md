WordPress用の自作ポートフォリオテーマです。

既製テーマは使用せず、PHP・CSS・JavaScriptを用いてオリジナルテーマとして開発しました。

---

# 概要

自分の制作物や活動内容を掲載するためのポートフォリオサイトです。

デザインだけでなく、

- WordPressテーマ構築
- サーバ構築
- Apache設定
- Linux運用

まで含めて制作しています。

---

# URL

https://shinji.work

---

# 使用技術

## Frontend

- HTML
- CSS
- JavaScript

## Backend

- PHP
- WordPress

## Infrastructure

- Ubuntu / Debian
- Apache
- MySQL / MariaDB
- GitHub
- Let's Encrypt

---

# 実装内容

- WordPress自作テーマ
- オリジナルレイアウト
- レスポンシブ対応
- 投稿一覧表示
- 投稿詳細表示
- アイキャッチ画像
- カスタムデザイン
- GitHubデプロイ
- HTTPS化

---

# 工夫した点

## 既製テーマを使用しない構成

既存テーマをカスタマイズするのではなく、
PHPテンプレートから自作しました。

- header.php
- footer.php
- functions.php
- single.php
- archive.php

などを理解しながら構築しています。

---

## デザイン

The Designers Republic などの
グラフィックデザイン文化から影響を受けた、
ミニマルでシャープなデザインを意識しました。

余白・文字サイズ・配色バランスを重視しています。

---

## サーバ構築

Linuxサーバ上で、

- Apache
- MySQL
- PHP
- WordPress

を構築しました。

ドメイン設定やHTTPS化も行っています。

---

# 苦労した点

## WordPressのテンプレート階層

WordPress独自のテンプレート階層を理解するまで苦労しました。

特に、

- index.php
- single.php
- archive.php
- page.php

など、どのテンプレートが優先されるかを理解する必要がありました。

---

## Linux権限問題

WordPressでは、

- wp-config.php
- uploads
- themes

などの書き込み権限問題に何度も遭遇しました。

特に、

```bash
Permission denied
```

エラーへの対応で、

- chown
- chmod
- Apache実行ユーザー

について理解が深まりました。

---

## Apache設定

Apache設定では、

- VirtualHost
- mod_rewrite
- DocumentRoot
- HTTPS化

に苦労しました。

特に WordPress のパーマリンク設定では、
Rewrite設定の理解が必要でした。

---

# 学んだこと

この制作を通して、

- PHPテンプレート開発
- WordPress内部構造
- Linux運用
- Apache設定
- HTTPS化
- Git/GitHub運用

を実践的に学ぶことができました。

特に「実際に公開する難しさ」を強く経験しました。

---

# 今後追加したい機能

- カスタム投稿タイプ
- 管理画面カスタマイズ
- お問い合わせフォーム
- アニメーション強化
- Headless CMS化

---
