## 交作業流程

###概述

完成當周作業後，先將更動的檔案新增到自己新增的 Branch上，完成 Commit前，先通過系統的預 Commit，然後把分支推回遠端。

在遠端更新後，提出 pull request，並複製位址到交作業的專案區，另開一個議題，貼上網頁 URL 以及本週想說的話後等待批改。  

如果這部分有錯，再回頭修改。  
如果沒錯，Huli 會通過 merge，並結束這個 issue。

等待遠端 master 更新後，再從遠端把 master branch pull down，並刪除本地端新開的分支。

--
###本地端
#####01 結束檔案更動 
#####02 將作業檔案新增到本地端的 git 
>2-1 新增分支：`git branch hw1`  
 2-2 為檔案導入 Git：`branch hw1 ~ git add hw1`  
 2-3 這時候可使用 `git add add.` 一次新增所有變更檔案

#####03 通過預檢測、完成本地端檔案更新
	輸入 Commit：`branch hw1 ~ git commit hw1`  
	**commit 還有其他參數，如 -a -m -amed**
此時會啟動 pre-commit 系統
>	pre-commit 成功 —> 成功 commit  
   	pre-commit 失敗 —> 修改檔案，退回 01 重新操作
   
#####04 更新線上分支
> 先回到本地端的新分支上：`checkout branch hw1`
 再將本地分支推到線上：`~ git push origin hw1`

-- 
###遠端


#####05 遠端更新分支
>a. 在遠端刷新儲存庫頁面： repository 的 branch頁面  
 b. 等待遠端 Branch 頁面重新整理後，發出 pull request  
 c. 按下 compare and pull request，並在提交頁面鍵入訊息

#####06 建立 issue

在交作業區建立 issue ，輸入標題、訊息後，再貼上作業網址（pull request 頁面）等待作業批改

>作業通過 -> branch hw1 被 merge 到 master，此issue關閉  
>作業有誤 ->重新修改，回到01（此issue）

--
###本地端 again

#####07  回到 master ，從線上更新本地端： 
>git checkout master  
>git pull master  
>刪除branch week1
