# Random-Picture
随机图片api    

**实验地址:**  
<http://miku.ueuo.com/>*(无稳定性保证)*  
**注意:**  
[url.txt](http://miku.ueuo.com/url.txt)务必一行一个url，不要留空格什么的  
[show.php](http://miku.ueuo.com/show.php)用于展示url.txt的所有图片  
[mini.php](http://miku.ueuo.com/mini.php)只会转至url.txt的随机1张  
[360.php](http://miku.ueuo.com/360.php)会从360壁纸取得图片(约200kb，自行测试质量)  

## 访问[index.php](http://miku.ueuo.com/)

直接跳转至图片地址   

访问?id=数字，跳转至指定图片


## 访问[?type=output](http://miku.ueuo.com/?type=output)

服务器读取图片后输出   

不建议使用


## 访问[?type=json](http://miku.ueuo.com/?type=json)
```json  
  {"code":"200","url":"https:\/\/fp1.fghrsh.net\/2019\/07\/15\/c2549aaa63db078834ead6a92fe63b61.jpg","width":"1920","height":"1080","mime":"image\/jpeg","size":"821735"}
```

## 访问[?type=js](http://miku.ueuo.com?type=js)

输出js
```javascript
 var pic_random='https://fp1.fghrsh.net/2019/07/15/aceb221b57c4987ac324e10aeaf69ede.jpg';
 var pic_end=34;  //最后一张图片的id
 var pic_rdn=25;  //随机图片的id，每次不同
```
