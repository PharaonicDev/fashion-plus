 <?php 
  include 'header.php'; 
  include 'loader.php';
  include 'stylesheet.php';

 ?>
    <div class="scrollTop transition3"></div>
    <div class=panel>
        <div class="panelbutton panelFirst">
            <span class="click color-green-black"><i class="fa fa-sliders"></i></span>
            <div class=control>
                <h3 class=upper>PANEL TOOL</h3>
                <ul class=LAYOUT>
                    <li class=upper>LAYOUT MOD</li>
                    <li class="color-green-black transition3 hover-color-green">Full Width</li>
                    <li class="transition3 hover-color-green">Boxed Large</li>
                    <li class="transition3 hover-color-green">Boxed Medium</li>
                </ul>
                <div class=theme>
                    <h3 class=upper>THEME</h3>
                    <ul>
                        <li class=active data-theme-color=green-black></li>
                        <li class="" data-theme-color=blue></li>
                        <li data-theme-color=green></li>
                        <li data-theme-color=pink></li>
                        <li data-theme-color=purple></li>
                        <li data-theme-color=red></li>
                    </ul>
                </div>
                <div class="float-header running-he">
                    <h3 class=upper>FLOAT HEADER</h3>
                    <div>
                        <div class="cap yes-he"><i>yes</i></div>
                        <div class="cap no-he"><i>no</i></div>
                        <span class=back-green-black-whate></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="panelbutton panelbutton2">
            <div id=colorpickerHolder class="Background-Content-picker picker" data-theme=Background-Content-picker></div>
            <div id=colorpickerHolder3 class="Color-Text-picker picker" data-theme=Color-Text-picker></div>
            <div id=colorpickerHolder4 class="Link-Color-picker picker" data-theme=Link-Color-picker></div>
            <div id=colorpickerHolder5 class="Link-Hover-Color-picker picker" data-theme=Link-Hover-Color-picker></div>
            <div id=colorpickerHolder6 class="Text-Color-picker picker" data-theme=Text-Color-picker></div>
            <div id=colorpickerHolder7 class="Color-Name-Product-picker picker" data-theme=Color-Name-Product-picker></div>
            <div id=colorpickerHolder8 class="Color-Price-picker picker" data-theme=Color-Price-picker></div>
            <div id=colorpickerHolder9 class="Color-Price-Old-picker picker" data-theme=Color-Price-Old-picker></div>
            <div id=colorpickerHolder10 class="BgColor-Cart-picker picker" data-theme=BgColor-Cart-picker></div>
            <div id=colorpickerHolder11 class="BgColor-Cart-Hover-picker picker" data-theme=BgColor-Cart-Hover-picker></div>
            <div id=colorpickerHolder12 class="Color-Cart-picker picker" data-theme=Color-Cart-picker></div>
            <div id=colorpickerHolder13 class="Color-Wishlist-picker picker" data-theme=Color-Wishlist-picker></div>
            <div id=colorpickerHolder14 class="Color-Wishlist-Hover-picker picker" data-theme=Color-Wishlist-Hover-picker></div>
            <div id=colorpickerHolder15 class="Color-Compare-picker picker" data-theme=Color-Compare-picker></div>
            <div id=colorpickerHolder16 class="Color-Compare-Hover-picker picker" data-theme=Color-Compare-Hover-picker></div>
            <span class="click color-green-black"><i class="fa fa-sliders"></i></span>
            <div class=control>
                <h3 class=upper>LIVE THEME EDITOR</h3>
                <div class=live-theme>
                    <ul>
                        <li class=active><a href="#" class="font-size12 upper">selectors</a></li>
                        <li><a href="#" class="font-size12 upper">elements</a></li>
                    </ul>
                </div>
                <div class="SELECTORS Select-page">
                    <div class=body-content>
                        <h4 class="hover-color-green font-size12">Body Content</h4>
                        <div class=Body-Bg-Image>
                            <span class="body-bage font-size12 color-3">Body Bg Image</span>
                            <div class=clear>
                                <span class="cap clear-off font-size12">clear</span>
                            </div>
                            <p class="font-size11 color-3 folder">Those Images in folder<br> YOURTHEME/assets/img/patterns/</p>
                            <div class=img>
                                <ul class=row>
                                    <li class=""><img src="../images/bedge_grunge_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/billie_holiday_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/black_twill_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/dust_%402X.png" alt="sorry browser not allowed image" /></li>
                                </ul>
                                <ul class=row>
                                    <li><img src="../images/say.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/grid_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/light_noise_diagonal_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/navy_blue_%402X.png" alt="sorry browser not allowed image" /></li>
                                </ul>
                                <ul class=row>
                                    <li><img src="../images/noise_lines_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/retina_wood_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/retro_intro_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/shattered_%402X.png" alt="sorry browser not allowed image" /></li>
                                </ul>
                                <ul class=row>
                                    <li><img src="../images/skelatal_weave_%402X.png" alt="sorry browser not allowed image" /></li>
                                    <li><img src="../images/textured_stripes_%402X.png" alt="sorry browser not allowed image" /></li>
                                </ul>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Background Content</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Background-Content-picker>
                                        </li>
                                        <li>
                                            <i>
<span class="cap clear-off font-size12" data-clear-picker=Background-Content-picker>clear</span>
</i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Font-Size</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <select data-size-picker=font-size-content>
<option>&nbsp;</option>
<option>inherit</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
</select>
                                        </li>
                                        <li>
                                            <i>
<input class="cap clear-off font-size12" type=reset value=clear data-clear-picker=font-size-content />
</i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Font-Family</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <select data-size-picker=font-family-content>
<option>&nbsp;</option>
<option>inherit</option>
<option value="'Poppins', sans-serif">Poppins</option>
<option value="'Roboto', sans-serif">Roboto</option>
<option value="'Pathway Gothic One', sans-serif">Pathway</option>
<option value="'Playfair Display', serif">Playfair</option>
</select>
                                        </li>
                                        <li>
                                            <i>
<input class="cap clear-off font-size12" type=reset value=clear data-clear-picker=font-family-content />
</i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Text</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Text-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12" data-clear-picker=Color-Text-picker>clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Link Color</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Link-Color-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12" data-clear-picker=Link-Color-picker>clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Link Hover Color</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Link-Hover-Color-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="SELECTORS products-img">
                    <div class=body-content>
                        <h4 class="hover-color-green font-size12">Products Page</h4>
                        <div class=Body-Bg-Image>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Text Color</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Text-Color-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Name Product</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Name-Product-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Price</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Price-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Price Old</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Price-Old-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">BgColor Cart</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=BgColor-Cart-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">BgColor Cart(Hover)</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=BgColor-Cart-Hover-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Cart</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Cart-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Wishlist</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Wishlist-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Wishlist Hover</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Wishlist-Hover-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Compare</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Compare-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=Background-Content>
                                <span class="font-size11 color-3">Color Compare Hover</span>
                                <div class=clear-fix>
                                    <ul>
                                        <li>
                                            <input readonly data-color-picker=Color-Compare-Hover-picker>
                                        </li>
                                        <li>
                                            <i><span class="cap clear-off font-size12">clear</span></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=main>
        <div class="overflow-navigation hidden-xs"></div>
        <div class="menu container-our">
            <div class="Top-menu back-whate2">
                <div class=container>
                    <div class="contact float-left-jq hidden-xs">
                        <ul>
                            <li class=float-left-jq>
                                <a class="gray-black transition3 font-size15 hover-color-green" href="#">Find a store</a>
                            </li>
                            <li class=float-left-jq>
                                <a class="gray-black transition3 font-size15 hover-color-green" href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="usd float-left-jq">
                        <ul class=float-right-jq>
                            <li class="float-left-jq hover-color-green">
                                <span class="gray-black transition3 font-size15">$ USD</span>
                                <i class="icon-arrow-down fa fa-sort-down transition3"></i>
                                <ul class=transition3>
                                    <li class=transition3><a class="font-size13 gray-black transition3 hover-color-green" href="#">€ EUR</a></li>
                                    <li class=transition3><a class="font-size13 gray-black transition3 hover-color-green" href="#">$ USD</a></li>
                                </ul>
                            </li>
                            <li class="float-left-jq hover-color-green">
                                <span class="gray-black transition3 font-size15">English</span>
                                <i class="icon-arrow-down fa fa-sort-down transition3"></i>
                                <ul class=transition3>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href=brown.html>
<img src="../images/home/1-1.jpg" alt="sorry web not allowed image"/>
English
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="../ar/pages/brown.html">
<img src="../images/home/6-6.jpg" alt="sorry web not allowed image"/>
اللغة العربية</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<img src="../images/home/2-2.jpg" alt="sorry web not allowed image"/>
Español
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<img src="../images/home/3-3.jpg" alt="sorry web not allowed image"/>
Deutsch
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<img src="../images/home/4-4.jpg" alt="sorry web not allowed image"/>
Français
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<img src="../images/home/5-5.jpg" alt="sorry web not allowed image"/>
Italiano
</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="float-left-jq hover-color-green">
                                <i class="icon fa fa-user transition3"></i>
                                <span class="gray-black transition3 font-size15">Account</span>
                                <i class="icon-arrow-down fa fa-sort-down transition3"></i>
                                <ul class=transition3>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<span>Sign in</span>
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#"><span>My account</span></a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<span>Wishlist <span class=total-compare>0</span></span>
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<span>Compare <span class=total-compare>0</span></span>
</a>
                                    </li>
                                    <li class=transition3>
                                        <a class="font-size13 gray-black transition3 hover-color-green" href="#">
<span>Checkout</span>
</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class=cf></div>
                </div>
            </div>
        </div>
        <div class=nav-our>
            <div class=container-our>
                <nav class=navigation>
                    <div class=container>
                        <div class=nav-outer>
                            <div class="logo float-left-jq">
                                <div class=img><img src="../images/home/logo.png" alt="sorry browser not allowed image" /></div>
                            </div>
                            <div class="toogle-navigation hidden-md">
                                <div class=click-toogle>
                                    <div>
                                        <span class=transition2></span>
                                        <span class=transition2></span>
                                        <span class=transition2></span>
                                    </div>
                                </div>
                            </div>
                            <div class="nav float-left-jq">
                                <div class=list-nav>
                                    <div class="close hidden-md">
                                        <h4 class=upper>close</h4>
                                    </div>
                                    <ul>
                                        <li class=float-left-jq>
                                            <a class="transition3 cap hover-color-green" href="../index-2.html#div">Home</a>
                                            <div class=hidden-md>
                                                <span class=transition2></span>
                                                <span class=transition2></span>
                                            </div>
                                            <ul class="">
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">HOME 1</a>
                                                </li>
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">HOME 2</a>
                                                </li>
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">HOME 3</a>
                                                </li>
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">HOME 4</a>
                                                </li>
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">HOME 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=float-left-jq>
                                            <a class="transition3 active cap color-green-black hover-color-green" href="../shop.html">Shop</a>
                                            <div class=hidden-md>
                                                <span class=transition2></span>
                                                <span class=transition2></span>
                                            </div>
                                            <div class=ul>
                                                <ul class=float-left-jq>
                                                    <li>Categories 1</li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Smartphone</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Fashion</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Korean Style</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Toys</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Game Box</a></li>
                                                </ul>
                                                <ul class=float-left-jq>
                                                    <li>Categories 2</li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Accessories</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Electronic</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Watch machine</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Vegetable</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Bread</a></li>
                                                </ul>
                                                <ul class=float-left-jq>
                                                    <li>Categories 3</li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Blender</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Fruits</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Leaves</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Demonstrates</a></li>
                                                    <li><a class="gray-black transition3 hover-color-green" href="#">Computer</a></li>
                                                </ul>
                                                <div class=cf></div>
                                                <div class=Mauris>
                                                    <p>100 Mauris in erat <strong>$3.99</strong> justo nullam</p>
                                                    <a class="transition3 back-green-black " href="#">Condimentum</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=float-left-jq>
                                            <a class="transition3 cap hover-color-green" href="../new.html">New</a>
                                            <div class=hidden-md>
                                                <span class=transition2></span>
                                                <span class=transition2></span>
                                            </div>
                                            <div class=ul>
                                                <div class=float-left-jq>
                                                    <h4>News Product</h4>
                                                    <ul>
                                                        <li>
                                                            <div class="img float-left-jq"> <a href="#">
<img src="../images/home/8-printed-summer-dress.jpg" alt="sorry borwser not allowed image"/>
</a>
                                                            </div>
                                                            <div class="cont float-left-jq">
                                                                <a class="transition3 hover-color-green" href="#">Eam percipitur</a>
                                                                <span>$30.50</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="img float-left-jq"> <a href="#">
<img src="../images/home/10-faded-short-sleeves-tshirt.jpg" alt="sorry browser not allowed img"/>
</a>
                                                            </div>
                                                            <div class="cont float-left-jq">
                                                                <a class="transition3 hover-color-green" href="#">Fusce a congue</a>
                                                                <div>
                                                                    <span>$16.51</span>
                                                                    <span>(-5%)</span>
                                                                    <span>$15.68</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="img float-left-jq"> <a href="#">
<img src="../images/home/12-printed-dress.jpg" alt="sorry browser not allowed img"/>
</a>
                                                            </div>
                                                            <div class="cont float-left-jq">
                                                                <a class="transition3 hover-color-green" href="#">Morbi ullamcorper</a>
                                                                <span>$25.99</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=float-left-jq>
                                                    <h4>News Product</h4>
                                                    <ul>
                                                        <li>
                                                            <div class="img float-left-jq"> <a href="#">
<img src="../images/home/9-blouse.jpg" alt="sorry browser not allowed img"/>
</a>
                                                            </div>
                                                            <div class="cont float-left-jq">
                                                                <a class="transition3 hover-color-green" href="#">Purus interesset</a>
                                                                <span>$26.99</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="img float-left-jq"> <a href="#">
<img src="../images/home/11-blouse.jpg" alt="sorry browser not allowed img"/>
</a>
                                                            </div>
                                                            <div class="cont float-left-jq">
                                                                <a class="transition3 hover-color-green" href="#">Donec purus</a>
                                                                <span>$29.99</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="img float-left-jq"> <a href="#">
<img src="../images/home/13-printed-dress.jpg" alt="sorry browser not allowed img"/>
</a>
                                                            </div>
                                                            <div class="cont float-left-jq">
                                                                <a class="transition3 hover-color-green" href="#">Viris dolorum</a>
                                                                <span>$50.99</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class=float-left-jq>
                                                    <h4>Morbi ipsum</h4>
                                                    <div class=img>
                                                        <img src="../images/home/14-banner-menu-text.jpg" alt="sorry browser not allowed img">
                                                    </div>
                                                    <p>Mauris in erat justo nullam ac urna eu felis ut imperdiet nisi eu felis dapibus condimentum sit amet a sed ut imperdiet erat justo nullam ac urna eu felis ut imperdiet nisi eu felis dapibus condimentum sit amet a sed ut imperdiet nisi sed ut imperdiet nisi..</p>
                                                </div>
                                                <div class=cf></div>
                                            </div>
                                        </li>
                                        <li class=float-left-jq>
                                            <a class="transition3 cap hover-color-green" href="../blog.html">Blog</a>
                                            <div class=hidden-md>
                                                <span class=transition2></span>
                                                <span class=transition2></span>
                                            </div>
                                            <ul class="">
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">Morbi nunc lectus</a>
                                                </li>
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">Integer gravida cons</a>
                                                    <div class=hidden-md>
                                                        <span class=transition2></span>
                                                        <span class=transition2></span>
                                                    </div>
                                                    <ul class=transition3>
                                                        <li><a class="gray-black transition3 hover-color-green" href="#">Perfume</a></li>
                                                        <li><a class="gray-black transition3 hover-color-green" href="#">Lorem ipsum dolor</a></li>
                                                    </ul>
                                                </li>
                                                <li class=transition3>
                                                    <a href="#" class="cap gray-black transition3 hover-color-green">In et sollicitudin odio</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=float-left-jq>
                                            <a class="transition3 cap hover-color-green" href="../contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search float-left-jq">
                                <div class=icon-search>
                                    <ul>
                                        <li class=float-left-jq>
                                            <a class=hover-color-green href="#">
<i class="fa fa-search search"></i>
</a>
                                            <form id='form-icon' class='form-icon' method='post'><input type=hidden name=form-name value=form-icon />
                                                <input type=search placeholder="Search our catalog" />
                                                <button class="submit transition3">
<i class="fa fa-search search"></i>
</button>
                                            </form>
                                        </li>
                                        <li class=float-left-jq>
                                            <i class="shopping-cart fa fa-shopping-cart"></i>
                                            <span>
<span>o</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=cf></div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class=container-our>
            <div class="slider back-whate1 font-family-content">
                <ul>
                    <li class=moveText>
                        <div class=img></div>
                        <div class=container>
                            <div class=content-slider>
                                <div class=content-out>
                                    <div class=border></div>
                                    <article>
                                        <h2><span><span>New Colection 2018</span></span>
                                            <span>R</span><span>e</span><span>a</span><span>d</span><span>y</span> <span>t</span><span>o</span> <span>w</span><span>e</span><span>a</span><span>r</span></h2>
                                        <div>
                                            <p>The pinnacle of versatility, our core collection is flattering on all body types, looks great layered or alone, and is designed to span the seasons.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=sav>
                        <div class=img></div>
                        <div class=container>
                            <div class=content-slider>
                                <div class=content-out>
                                    <div class=border></div>
                                    <article>
                                        <h2><span><span>Carrying Capacity</span></span>
                                            <span>R</span><span>e</span><span>a</span><span>d</span><span>y</span> <span>t</span><span>o</span> <span>w</span><span>e</span><span>a</span><span>r</span></h2>
                                        <div>
                                            <p>Now that we often carry multiple devices and their respective chargers with us, techwear items are often well-considered with the storage they supply. Whether through simple designs such as zippered pockets or more elaborate solutions such as removable modular attachments.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=sav>
                        <div class=img></div>
                        <div class=container>
                            <div class=content-slider>
                                <div class=content-out>
                                    <div class=border></div>
                                    <article>
                                        <h2><span><span>Our Core</span></span>
                                            <span>C</span><span>o</span><span>l</span><span>l</span><span>e</span><span>c</span><span>t</span><span>i</span><span>o</span><span>n</span>
                                        </h2>
                                        <div>
                                            <p>One of the main advantages that techwear provides is its water repellency. Everyone hates getting caught in the rain and techwear offers a comfortable and practical solution to this problem.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=sav>
                        <div class=img></div>
                        <div class=container>
                            <div class=content-slider>
                                <div class=content-out>
                                    <div class=border></div>
                                    <article>
                                        <h2><span><span>Range of Motion</span></span> <span>C</span><span>o</span><span>m</span><span></span><span>f</span><span>o</span><span>r</span><span>t</span><br>
                                            <span>R</span><span>e</span><span>a</span><span>d</span><span>y</span> <span>t</span><span>o</span> <span>w</span><span>e</span><span>a</span><span>r</span></h2>
                                        <div>
                                            <p>While most pants and garments are cut to standard patterns, techwear challenges convention by designing patterns with the movement of the human body in mind.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class=prev-next-slider>
                    <h4><span>01</span>/ 04</h4>
                    <div class=prev-next>
                        <div class="prev transition3">
                            <img src="../images/home/prev.png" alt="sorry browser not allowed image" />
                        </div>
                        <div class="next transition3">
                            <img src="../images/home/next.png" alt="sorry browser not allowed image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=shop id=scroll-product>
            <div class=container-our>
                <div class="shop-content back-img-body-theme Background-Content-picker-content">
                    <div class=container>
                        <header class=top-shop>
                            <div class="Showing float-left-jq">
                                <form class='float-left-jq visible-md' method='post'><input type=hidden name=form-name value='form 2' />
                                    <input type=search placeholder=Search.... class=float-left-jq />
                                    <div class="submit transition3 float-left-jq">
                                        <input type=submit value="" />
                                    </div>
                                </form>
                            </div>
                            <div class="Filters float-right-jq">
                                <p class="visible-sm float-left-jq">Showing 1–12 of 60 results</p>
                                <div class=float-right-jq>
                                    <div class=float-left-jq>
                                        <select class=select-menu>
<option value=popularity>Sort by popularity</option>
<option value>Sort by average rating</option>
<option value=newness>Sort by newness</option>
<option value=price>Sort by price: low to high</option>
<option value=price-desc>Sort by price: high to low</option>
</select>
                                        <div class="Filters float-left-jq">
                                            <ul>
                                                <li class=float-left-jq>Filters</li>
                                                <li class="btn-switcher float-left-jq li-control"></li>
                                                <li class="btn-view-grid active float-left-jq li-control"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=cf></div>
                        </header>
                        <div class=shop-inset>
                            <aside class=float-left-jq>
                                <div class=inset-aside>
                                    <h4>Categories</h4>
                                    <ul>
                                        <li>
                                            <a href="accessories.html#scroll-product" class="float-left-jq transition3">Accessories</a>
                                            <span class="count float-right-jq transition3">9</span>
                                        </li>
                                        <li>
                                            <a href="clothes.html#scroll-product" class="float-left-jq transition3">Clothes</a>
                                            <span class="count float-right-jq transition3">16</span>
                                        </li>
                                        <li>
                                            <a href="furniture.html#scroll-product" class="float-left-jq transition3">Furniture</a>
                                            <span class="count float-right-jq transition3">23</span>
                                        </li>
                                        <li>
                                            <a href="hanging-pot.html#scroll-product" class="float-left-jq transition3">Hanging Pot</a>
                                            <span class="count float-right-jq transition3">2</span>
                                        </li>
                                        <li>
                                            <a href="kid.html#scroll-product" class="float-left-jq transition3">Kid</a>
                                            <span class="count float-right-jq transition3">5</span>
                                        </li>
                                        <li>
                                            <a href="lighting.html#scroll-product" class="float-left-jq transition3">Lighting</a>
                                            <span class="count float-right-jq transition3">6</span>
                                        </li>
                                        <li>
                                            <a href="men.html#scroll-product" class="float-left-jq transition3">Men</a>
                                            <span class="count float-right-jq transition3">5</span>
                                        </li>
                                        <li>
                                            <a href="plants.html#scroll-product" class="float-left-jq transition3">Plants</a>
                                            <span class="count float-right-jq transition3">8</span>
                                        </li>
                                        <li>
                                            <a href="pot.html#scroll-product" class="float-left-jq transition3">Pot</a>
                                            <span class="count float-right-jq transition3">5</span>
                                        </li>
                                        <li>
                                            <a href="vase.html#scroll-product" class="float-left-jq transition3">Vase</a>
                                            <span class="count float-right-jq transition3">8</span>
                                        </li>
                                        <li>
                                            <a href="women.html#scroll-product" class="float-left-jq transition3">Women</a>
                                            <span class="count float-right-jq transition3">8</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=size>
                                    <h4 class="cap title-aside">Size</h4>
                                    <ul class=size-ul>
                                        <li>
                                            <a href="#" class="upper float-left-jq transition2">l</a>
                                            <span class="count float-right-jq transition2">3</span>
                                        </li>
                                        <li>
                                            <a href="#" class="upper float-left-jq transition2">m</a>
                                            <span class="count float-right-jq transition2">3</span>
                                        </li>
                                        <li>
                                            <a href="#" class="upper float-left-jq transition2">s</a>
                                            <span class="count float-right-jq transition2">3</span>
                                        </li>
                                        <li>
                                            <a href="#" class="upper float-left-jq transition2">xl</a>
                                            <span class="count float-right-jq transition2">2</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="size color">
                                    <h4 class="cap title-aside">color</h4>
                                    <ul class="size-ul color-ul">
                                        <li>
                                            <a href="black.html#scroll-product" class="cap float-left-jq transition2">Black</a>
                                            <span class="count float-right-jq transition2">3</span>
                                        </li>
                                        <li>
                                            <a href="blue.html#scroll-product" class="cap float-left-jq transition2">blue</a>
                                            <span class="count float-right-jq transition2">4</span>
                                        </li>
                                        <li>
                                            <a href="#" class="cap float-left-jq transition2">Blue Navy</a>
                                            <span class="count float-right-jq transition2">1</span>
                                        </li>
                                        <li>
                                            <a href="brown.html#scroll-product" class="cap float-left-jq transition2">Brown</a>
                                            <span class="count float-right-jq transition2">1</span>
                                        </li>
                                        <li>
                                            <a href="#" class="cap float-left-jq transition2">Burlywood</a>
                                            <span class="count float-right-jq transition2">5</span>
                                        </li>
                                        <li>
                                            <a href="gray.html#scroll-product" class="cap float-left-jq transition2">Gray</a>
                                            <span class="count float-right-jq transition2">9</span>
                                        </li>
                                        <li>
                                            <a href="green.html#scroll-product" class="cap float-left-jq transition2">Green</a>
                                            <span class="count float-right-jq transition2">1</span>
                                        </li>
                                        <li>
                                            <a href="#" class="cap float-left-jq transition2">Orange</a>
                                            <span class="count float-right-jq transition2">1</span>
                                        </li>
                                        <li>
                                            <a href="pink.html#scroll-product" class="cap float-left-jq transition2">Pink</a>
                                            <span class="count float-right-jq transition2">2</span>
                                        </li>
                                        <li>
                                            <a href="#" class="cap float-left-jq transition2">Red</a>
                                            <span class="count float-right-jq transition2">3</span>
                                        </li>
                                        <li>
                                            <a href="#" class="cap float-left-jq transition2">Siliver</a>
                                            <span class="count float-right-jq transition2">3</span>
                                        </li>
                                        <li>
                                            <a href="#" class="cap float-left-jq transition2">White</a>
                                            <span class="count float-right-jq transition2">1</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=Popular-Tags>
                                    <h4 class="cap title-aside">Popular Tags</h4>
                                    <div class=tagcloud>
                                        <a href="#">backpack</a>,
                                        <a href="#">case</a>,
                                        <a href="#">case</a>,
                                        <a href="#">chair</a>,
                                        <a href="#">bottle</a>,
                                        <a href="#">clock</a>,
                                        <a href="#">cap</a>,
                                        <a href="#">clothes</a>,
                                        <a href="#">jeans</a>,
                                        <a href="#">kid</a>,
                                        <a href="#">lamp</a>,
                                        <a href="#">light</a>,
                                        <a href="#">Long Sleeves</a>,
                                        <a href="#">men</a>,
                                        <a href="#">pendant</a>,
                                        <a href="#">plants</a>,
                                        <a href="#">Round neck</a>,
                                        <a href="#">shelf</a>,
                                        <a href="#">skirt</a>,
                                        <a href="#">sofa</a>,
                                        <a href="#">stand</a>,
                                        <a href="#">storage</a>,
                                        <a href="#">summer</a>,
                                        <a href="#">swimsuit</a>,
                                        <a href="#">t-shirt</a>,
                                        <a href="#">tables</a>,
                                        <a href="#">vase</a>
                                    </div>
                                </div>
                            </aside>
                            <div class="float-left-jq content-product">
                                <div class="products-aside products active-product">
                                    <div class="product float-left-jq img-hover-8">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/9-5-1-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Contrasting Sleeve T-Shirt</a></h4>
                                                <div class=price>$32.95 <span class=sale>45.00</span></div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-hover-11">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/12-wallnut-wall-clock-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Wallnut Wall Clock</a></h4>
                                                <div class=price>$239.00</div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-2-hover-7">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/8-mikiya-uc2-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Tapas Walnut Chair</a></h4>
                                                <div class=price>$1,062.00</div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-2-hover-8">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/9-mikiya-vase-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Wooden Flower Vase</a></h4>
                                                <div class=price>$2,895.00</div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-2-hover-9">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/10-mikiya-cloth-storage-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Rodan Storage</a></h4>
                                                <div class=price>$1,295.00</div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-3-hover-2">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/3-mikiya-umbrella-stand-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Umbrella Stand</a></h4>
                                                <div class=price>$27.00 <span class=sale>$34.00</span></div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-3-hover-4">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/5-mikiya-masterwal-chair-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Masterwal Chair</a></h4>
                                                <div class=price>$87.00 <span class=sale>$99.00</span></div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-3-hover-10">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/11-5-1-2-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Eakeenan Ceiling Light</a></h4>
                                                <div class=price>$72.81 <span class=sale>$81.99</span></div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">Select Options</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product float-left-jq img-5-hover-4">
                                        <div class=product-aside>
                                            <div class=img-out>
                                                <a href="#" class=img>
<img src="../images/shop/5-pro12-370x370.jpg" alt=prod1 />
<span class=img-hover></span>
</a>
                                                <ul class=social-product>
                                                    <li class="">
                                                        <a href="#" class=""></a>
                                                        <ul class="">
                                                            <li><span>Add to Wishlist</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Show in Quickview</span></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                        <ul class="">
                                                            <li><span>Add to Cart</span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=p-content>
                                                <h4><a href="#" class=transition3>Functional backpack</a></h4>
                                                <div class=price>$59.00</div>
                                                <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                                <a href="#" class="cap add transition3">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>