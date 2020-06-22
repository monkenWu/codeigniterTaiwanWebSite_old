<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
    <div class="row">

        <div class="col-md-12 col-sm-12 text-center title">
            <span class="glyphicon glyphicon-download big-glyph"></span>
            CodeIgniter 目前有三種可選的版本
            <br>
            CodeIgniter3（穩定版本）、 CodeIgniter4 (未來版本）以及 CodeIgniter 2 (舊版本)
        </div>

        <!-- CodeIgniter 4 -->
        <div class="col-md-6 col-sm-6">
            <div class="bs-component">
                <div class="well download">
                    <h3 class="text-center">CodeIgniter 4</h3>

                    <p>CodeIgniter4 是即將推出的框架版本，它是針對 PHP 7.2 以上版本開發的。新版本的開發正在進行中，目前的版本是 <?= esc($v4name) ?> 。</p>

                    <p> 
                        你可以使用下方的按鈕下載 V4 框架，但我們建議你先看看使用手冊中的
                        
                        <a target="_blank" href="/user_guide/installation/index.html">安裝指引</a>

                        ，從多種安裝方式中選擇最適合你的：） 
                    </p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="http://github.com/codeigniter4/framework/archive/<?= esc($v4name, 'attr') ?>.zip" class="nav-link btn-success" title="Download the latest version">
                                <i class="glyphicon glyphicon-save"></i> 下載
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="http://forum.codeigniter.com/forum-28.html" class="nav-link btn-success" title="Join the discussion on our forum!">
                                <i class="fa fa-comments"></i> 討論區
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="http://github.com/codeigniter4/CodeIgniter4" class="nav-link btn-success" title="View CodeIgniter 4 on Github">
                                <i class="fa fa-github-square"></i> 原始碼
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/codeigniter4/translations" class="nav-link btn-success" title="System message translations">
                                <i class="fa fa-globe"></i> 系統語系
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CodeIgniter 3 -->
        <div class="col-md-6 col-sm-6">
            <div class="bs-component">
                <div class="well download">
                    <h3 class="text-center">CodeIgniter 3</h3>

                    <p>CodeIgniter <?= esc($v3name) ?> 是穩定的框架版本，適用於 PHP 5.6 以上。</p>

                    <p>與版本 2 相比有一些改進，特別是在資料庫、會談處理，以及加密方面。這個版本的開發還在進行當中。</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="<?= esc($v3link, 'attr') ?>" class="nav-link btn-primary" title="Download CodeIgniter 3">
                                <i class="glyphicon glyphicon-save"></i> 下載
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/bcit-ci/codeigniter3-translations/archive/<?= esc($v3trans, 'attr') ?>.zip" class="nav-link btn-primary" title="Download System Message Translations">
                                <i class="glyphicon glyphicon-save"></i> 系統語系
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/bcit-ci/CodeIgniter" class="nav-link btn-primary" title="View CodeIgniter 3 on Github">
                                <i class="fa fa-github-square"></i> 原始碼
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- CodeIgniter 2 -->
        <div class="col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-sm-6">
            <div class="bs-component">
                <div class="well download">
                    <h3 class="text-center">CodeIgniter 2</h3>

                    <p>CodeIgniter 2.2.6 是框架的舊版本。</p>

                    <p>2.x 分支最初發布於 2011 年 1 月，最後一個版本（2.2.6），是在 2015 年 10 月發布的。</p>

                    <p>至 2015 年 10 月 31 日，CodeIgniter 2 已經停止支援，目前並沒有進一步更新計畫。</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/bcit-ci/CodeIgniter/archive/2.2.6.zip" class="nav-link btn-primary" title="Download CodeIgniter 2">
                                <i class="glyphicon glyphicon-save"></i> 下載
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
<?= $this->endSection() ?>

