## 簡易部落格 － For Hunter to practice API

此專案為集合了以下功能的簡易練習用專案，藉以熟悉API操作

 - Get
   - 文章
     - [GET `/api/post/{row}/get`](#取得所有文章)
     - [GET `/api/post/get/{postGuid}`](#取得單一篇文章)
   - 類別
     - [GET `/api/category/get`](#取得所有類別)
 - Create
   - 文章
     - [POST `/api/post/add`](#新增文章)
   - 類別
     - [POST `/api/category/add`](#新增類別)
 - Update
   - 文章
     - [PUT `/api/post/update/{postUuid}`](#修改文章)
   - 類別
     - [PUT `/api/category/update/{categoryUuid}`](#修改類別)
 - Delete
   - 文章
     - [DELETE `/api/post/delete`](#刪除文章)
   - 類別
     - [DELETE `/api/category/delete`](#刪除類別)

<br/>

---
<br/>

#### 安裝方式
\
Clone repo
```
# git clone https://github.com/eddy7697/simple-blog.git
```
\
vendor and moudule
```
# composer install
```
\
建立 env

**＊請注意，在確認專案底下存在.env檔案後，務必確認是否連上資料庫**

**若沒有資料庫存在，請自行建立，並對應設定檔**

[phpMyAdmin 新增資料庫](https://www.siteground.com/tutorials/phpmyadmin/create-populate-tables/)

[MySQL Workbench. 新增資料庫](https://stackoverflow.com/questions/5515745/create-a-new-database-with-mysql-workbench)
```
# cp .env.example .env
```
\
Generate key
```
# php artisan key:generate
```
\
Database migration
```
# php artisan migrate
```
\
Start and do your homework
```
# php artisan serve
```
<br/>

---
<br/>
## 文章
<br/>
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
---
<br/>
## 類別
<br/>
#### 取得所有類別

<table>
  <tr>
    <td>URL</td>
    <td>/api/category/get</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>GET</td>
  </tr>
</table>

說明

 - 取得全部的類別

參數

 - 無

---
#### 新增類別

<table>
  <tr>
    <td>URL</td>
    <td>/api/category/add</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>POST</td>
  </tr>
</table>

參數物件

```
{
  categoryTitle: '類別標題',
  categoryDescription: '類別簡述',
  parentUuid: '父類別uuid'
}
```
---
#### 修改類別

<table>
  <tr>
    <td>URL</td>
    <td>/api/category/update/{categoryUuid}</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>PUT</td>
  </tr>
</table>

參數
 - `categoryUuid`
   - 類別的uuid

參數物件
```
{
  categoryTitle: '類別標題',
  categoryDescription: '類別簡述',
  parentUuid: '父類別uuid'
}
```
---
#### 刪除類別

<table>
  <tr>
    <td>URL</td>
    <td>/api/category/delete</td>
  </tr>
  <tr>
    <td>Methos</td>
    <td>DELETE</td>
  </tr>
</table>

參數物件
```
{
  categoryUuid: '類別的uuid',
}
```
