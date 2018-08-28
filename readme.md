## 簡易部落格 － For Hunter to practice API

此專案為集合了以下功能的簡易練習用專案，藉以熟悉API操作

 - Get
   - [GET `/api/post/{row}/get`](#取得所有文章)
   - [GET `/api/post/get/{postGuid}`](#取得單一篇文章)
 - Create
   - [POST `/api/post/add`](#新增文章)
 - Update
   - [PUT `/api/post/update/{postUuid}`](#修改文章)
 - Delete
   - [DELETE `/api/post/delete`](#刪除文章)

#### 安裝方式

> clone repo
```
# git clone https://github.com/eddy7697/simple-blog.git
```

> vendor and moudule
```
# composer install
# npm install
```

> 建立 env
>
> **＊請注意，在確認專案底下存在.env檔案後，務必確認是否連上資料庫**
>
> **若沒有資料庫存在，請自行建立，並對應設定黨**
>
> [phpMyAdmin 新增資料庫](https://www.siteground.com/tutorials/phpmyadmin/create-populate-tables/)
>
> [MySQL Workbench. 新增資料庫](https://stackoverflow.com/questions/5515745/create-a-new-database-with-mysql-workbench)
```
# cp .env.example .env
```

> generate key
```
# php artisan key:generate
```

> Start and do your homework
```
# php artisan serve
# npm run watch
```

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

---
#### 新增文章

<table>
  <tr>
    <td>URL</td>
    <td>/api/post/add</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>POST</td>
  </tr>
</table>

參數物件

```
{
  postTitle: '文章標題',
  postAuthor: '文章作者',
  postCategory: '文章類別',
  postContent: '文章內容'
}
```
---
#### 修改文章

<table>
  <tr>
    <td>URL</td>
    <td>/api/post/update/{postUuid}</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>PUT</td>
  </tr>
</table>

參數
 - `postUuid`
   - 文章的uuid

參數物件
```
{
  postTitle: '文章標題',
  postCategory: '文章類別',
  postContent: '文章內容'
}
```
---
#### 刪除文章

<table>
  <tr>
    <td>URL</td>
    <td>/api/post/delete</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>DELETE</td>
  </tr>
</table>

參數物件
```
{
  postUuid: '文章的uuid',
}
```
