## 簡易部落格 － For Hunter to practice API

此專案為集合了以下功能的簡易練習用專案，藉以熟悉API操作

 - Get
 - Create
 - Update
 - Delete

#### 安裝方式

`# git clone https://github.com/eddy7697/simple-blog.git`
> clone repo


```
# composer install

# npm install
```
> 安裝相依套件

`# cp .env.example .env`
> new env

`# php artisan key:generate`
> generate key
---
#### 取得所有文章

<table>
  <tr>
    <td>URL</td>
    <td>/api/post/{row}/get</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>GET</td>
  </tr>
</table>

參數

 - `row`
   - 每一頁會顯示的數量

---
#### 取得單一篇文章

<table>
  <tr>
    <td>URL</td>
    <td>/api/post/get/{postGuid}</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>GET</td>
  </tr>
</table>

參數

 - `postGuid`
   - 文章的postGuid，帶入以當指標
