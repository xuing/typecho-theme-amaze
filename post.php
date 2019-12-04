<?php
/**
 * 这是基于AmazeUI&Jeklly theme的主题
 *
 * @package Amaze Theme
 * @author Spiritree & Xuing
 * @version 2.0.0
 * @link spiritree.me xuing.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<!-- content start -->
<div class="container">
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-lg-12 am-u-sm-12">
        <article class="am-article blog-article-p article-trigger">
            <div id="post-content" class="am-article-bd">
                <?php $this->content(); ?>
            </div>
        </article>
        <!-- <hr>
        <ul class="pager">
            <li class="previous"><?php $this->thePrev('%s',''); ?></li>
            <li class="next"><?php $this->theNext('%s',''); ?></li>
        </ul> -->
        <hr>
    </div>

</div>
</div>
<?php $this->need('comments.php'); ?>
<div id="directory-content" class="directory-content">
    <div id="directory"></div>
</div>
<!-- content end -->
<?php $this->need('footer.php'); ?>
<script src="https://cdn.bootcss.com/headroom/0.10.3/headroom.min.js"></script>
<script>
var postDirectoryBuild=function(){var b=function a(l,h){var k=[],e=typeof h==="object",g=typeof h==="string",j,f,d;for(f=0,d=l.length;f<d;f++){j=l[f];if((j.nodeType===1||j.nodeType===9)&&(!h||e&&h.test(j.tagName.toLowerCase())||g&&j.tagName.toLowerCase()===h)){k.push(j)}}return k},c=function(e,f,r){var n=[],m=[],h,p,d,j,l,s,o,g,k,q;h=(function(i,C,A){var w=b(i.childNodes,/^h\d$/),x=[],v=1,B=1,z=0,D=1,t="directory"+(Math.random()+"").replace(/\D/,""),B,y,u;while(w.length){u=w.shift();C.push(u.innerHTML);y=+u.tagName.match(/\d/)[0];if(y>v){x.push(1);B+=1}else{if(y===B||y>B&&y<=v){x.push(0);B=B}else{if(y<B){x.push(y-B);B=y}}}z+=x[x.length-1];v=y;u.id=u.id||(t+D++);A.push(u.id)}if(z!==0&&x[0]===1){x[0]=0}return x})(e,n,m);j=p=document.createElement("ul");q=document.createElement("span");q.style="color:#F38181;font-weight:600;";q.innerHTML="目录";p.appendChild(q);dirNum=[];for(g=0,k=h.length;g<k;g++){d=h[g];if(d===1){l=document.createElement("ul");if(!j.lastElementChild){j.appendChild(document.createElement("li"))}j.lastElementChild.appendChild(l);j=l;dirNum.push(0)}else{if(d<0){d*=2;while(d++){if(d%2){dirNum.pop()}j=j.parentNode}}}dirNum[dirNum.length-1]++;s=document.createElement("li");o=document.createElement("a");o.href="#"+m[g];o.innerHTML=!r?n[g]:dirNum.join(".")+" "+n[g];s.appendChild(o);j.appendChild(s)}f.appendChild(p)};c(document.getElementById("post-content"),document.getElementById("directory"),false)};postDirectoryBuild();
</script>
<script>
    var postDirectory = new Headroom(document.getElementById("directory-content"), {
    tolerance: 5,
    offset: 240,
    classes: {
        initial: "initial",
        pinned: "pinned",
        unpinned: "unpinned"
    }
});
postDirectory.init();
</script>