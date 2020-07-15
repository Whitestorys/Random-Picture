# Random-Picture
随机图片api    

**实验地址:**  
<http://miku.ueuo.com/>*(无稳定性保证)*  
**注意:**  
[url.txt](http://miku.ueuo.com/url.txt)务必一行一个url，不要留空格什么的  
[show.php](http://miku.ueuo.com/show.php)用于展示url.txt的所有图片  
[mini.php](http://miku.ueuo.com/mini.php)只会转至url.txt的随机1张  
[360.php](http://miku.ueuo.com/360.php)会从360壁纸取得图片(约200kb，自行测试质量)  

  <section>
    <p class="h3"><strong>直接调用</strong></p>
    <p>访问index.php即可，跳转至图片地址</p>
    <p>访问?id=数字，跳转至指定图片</p>
  </section>
  <section>
    <p class="h3"><strong>访问?type=output</strong></p>
    <p>服务器输出json</p>
    <p>不建议使用</p>
  </section>
  <section>
    <p class="h3"><strong>访问?type=json</strong></p>
    <p>服务器随机输出</p>
    <pre class="language-html">
    <code class="language-html">     
{&quot;code&quot;:&quot;200&quot;,&quot;url&quot;:&quot;https:\/\/fp1.fghrsh.net\/2019\/07\/15\/c2549aaa63db078834ead6a92fe63b61.jpg&quot;}
    </code>
</pre>
  </section>
  <section>
    <p class="h3"><strong>访问?type=JSON</strong></p>
    <p>服务器读取图片信息后输出json，如非需要图片信息不建议使用</p>
    <pre class="language-html">
    <code class="language-html">     
{&quot;code&quot;:&quot;200&quot;,&quot;url&quot;:&quot;https:\/\/fp1.fghrsh.net\/2019\/07\/15\/c2549aaa63db078834ead6a92fe63b61.jpg&quot;,&quot;width&quot;:&quot;1920&quot;,&quot;height&quot;:&quot;1080&quot;,&quot;mime&quot;:&quot;image\/jpeg&quot;,&quot;size&quot;:&quot;821735&quot;}
    </code>
</pre>
  </section>