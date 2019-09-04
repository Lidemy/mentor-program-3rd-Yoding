### 資料庫架構
資料庫名稱：yoding_users

| 欄位名稱 | 欄位型態 | 說明 |設定|
|--------|--------|--------|----|
|user-id|INT(10)|使用者 id|Unique 、AI|
|username|VARCHAR(16)|使用者名稱|Unique|
|nickname|VARCHAR(32)|暱稱||
|password|VARCHAR(16)||

資料庫名稱：yoding_comments

| 欄位名稱 | 欄位型態 | 說明 |設定|
|----------|----------|------|---|
|message-id|INT(10)|留言編號||
|user-id|INT(10)|使用者編號||
|content|TEXT(1000)|留言內容||
|created_at|DATETIME|時間戳記||
|hidden|INT(1)|刪除標記||UNDO

資料庫名稱：yoding_nickname（待做）

| 欄位名稱 | 欄位型態 | 說明 |設定|
|----------|----------|------|---|
|user-id|INT(10)|使用者編號|Unique 、AI|
|nickname|VARCHAR(32)|使用者暱稱||


### 頁面架構

###### 前台顯示頁：
- message_board.php 留言板
- login.php 會員登入頁
- signup.php 會員註冊頁

###### 後台管理頁：
- admin.php //後台、待做

###### 系統：
- conn.php DB連線
- handle_login.php 登入功能
- handle_logout.php 登出功能
- handle_add_message.php 留言功能
- handle_add_user.php 會員註冊功能