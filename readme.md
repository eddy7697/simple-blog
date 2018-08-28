## 簡易部落格 － For Hunter to practice API

此專案為集合了以下功能的簡易練習用專案，藉以熟悉API操作
[安裝方式](####安裝方式)

 - Get
   - [GET `/api/post/{row}/get`](####取得所有文章)
   - [GET `/api/post/get/{postGuid}`](####取得單一篇文章)
 - Create
   - [POST `/api/post/add`](####新增文章)
 - Update
   - [PUT `/api/post/update/{postUuid}`](####修改文章)
 - Delete
   - [DELETE `/api/post/delete`](####刪除文章)

#### 安裝方式


```
# git clone https://github.com/eddy7697/simple-blog.git
```
> clone repo


```
# composer install
# npm install
```
> vendor and moudule

```
# cp .env.example .env
```
> new env

```
# php artisan key:generate
```
> generate key

```
# php artisan serve
# npm run watch
```
> Start and do your homework
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
  postCategory: '文章類別',
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
  postCategory: '文章類別',
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