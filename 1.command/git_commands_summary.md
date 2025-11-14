# Git コマンドまとめ（訓練校用）

## ■ 基本操作

| コマンド | 説明 |
|-----------|------|
| `git init` | 新しいGitリポジトリを作成 |
| `git clone <URL>` | リモートリポジトリをローカルにコピー |
| `git status` | 現在の変更状態を確認 |
| `git add .` | 全ての変更をステージに追加 |
| `git commit -m "メッセージ"` | ステージ内容をコミット |
| `git push origin main` | リモートのmainブランチに変更を送信 |
| `git pull origin main` | リモートのmainブランチから最新を取得・統合 |
| `git push -u origin main` | upstream設定。以後 `git push` だけで送信可能 |
| `git remote -v` | 接続中のリモートURLを確認 |
| `git log` | コミット履歴を表示（`--oneline --graph` 推奨） |

---

## ■ ブランチ操作

| コマンド | 説明 |
|-----------|------|
| `git branch` | ブランチ一覧を表示 |
| `git checkout -b feature/xxxx` | 新しいブランチを作成して切り替え |
| `git checkout main` | mainブランチに戻る |
| `git merge feature/xxxx` | 指定ブランチを統合 |
| `git branch -d feature/xxxx` | ローカルブランチを削除 |
| `git push origin --delete feature/xxxx` | リモートブランチを削除 |

**ブランチ命名規則例：**
- 新機能 → `feature/login-form`
- バグ修正 → `fix/navbar-display`
- テストや設定 → `chore/config-update`

---

## ■ 差分・履歴確認

| コマンド | 説明 |
|-----------|------|
| `git diff` | ステージ前の変更差分を確認 |
| `git diff --staged` | ステージ済み変更の差分を確認 |
| `git log --oneline --graph --decorate` | 履歴を1行グラフで表示 |

---

## ■ 作業の取り消し・やり直し

| コマンド | 説明 |
|-----------|------|
| `git revert <commit_id>` | 指定コミットを「取り消す新しいコミット」を作成（安全） |
| `git reset --hard <commit_id>` | 指定コミットまで戻り、以降を破棄（危険） |
| `git checkout -- <file>` | 変更を破棄して最後のコミット状態に戻す |

---

## ■ 一時退避（stash）

| コマンド | 説明 |
|-----------|------|
| `git stash` | 作業中の変更を一時退避 |
| `git stash list` | stashの一覧を確認 |
| `git stash apply` | 直近のstashを復元 |
| `git stash pop` | apply＋削除を同時に実行 |
| `git stash drop` | 指定stashを削除 |

---

## ■ 作業の流れ例

```bash
# 最新を取得
git pull origin main

# 新しい作業ブランチを作成
git checkout -b feature/add-login

# コード編集
# ファイルを追加
git add .
git commit -m "add: ログイン機能追加"

# リモートへ共有
git push origin feature/add-login

# GitHub上で Pull Request → マージ
