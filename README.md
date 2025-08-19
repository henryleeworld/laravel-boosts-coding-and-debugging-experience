# Laravel 12 提升程式碼編寫和偵錯體驗

引入 laradumps 的 laradumps 套件來擴增提升程式碼編寫和偵錯體驗，不同於傳統的偵錯方法會打斷你的應用程式流程或使瀏覽器輸出雜亂無章，LaraDumps 會將你的偵錯資訊顯示在簡潔、整理的獨立桌面應用程式中。

## 使用方式
- 該套件繪圖需要安裝 LaraDumps 桌面應用程式。
> 如果是在電腦作業系統 Windows，可以參考官方下載[連結](https://github.com/laradumps/app/releases/download/v4.6.1/LaraDumps-Setup-4.6.1.exe)進行下載安裝。
> 如果是在電腦作業系統 MacOS，可以使用 Homebrew 來安裝：brew install --cask laradumps/app/laradumps。
> 如果使用 Linux，可以執行指令來安裝：sudo snap install laradumps。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/debug` 來進行偵錯。

----

## 畫面截圖
![](https://i.imgur.com/sgsBP4I.png)
> 將資料庫查詢偵錯資訊顯示在獨立桌面應用程式
