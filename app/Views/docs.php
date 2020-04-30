<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
	<div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
            <span class="glyphicon glyphicon-book big-glyph"></span>
			<p>
                CodeIgniter 主要的文件是「使用手冊」<br/>
                使用手冊包含了介紹、教學，一些「如何使用」的指南，以及框架內建的組件的參考文件。
            </p>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3 class="text-center">CodeIgniter 4</h3>

                    <p class="text-center">
                        CodeIgniter4 是即將正式推出的框架版本。
                        <br>
                        在
                        <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt">MIT 授權條款</a>
                        下授權的框架。
                    </p>
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="/userguide/index.html"
                               class="nav-link btn-success" title="Read it online">
                                <i class="glyphicon glyphicon-book"></i> 線上使用手冊
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://github.com/monkenWu/codeIgniter4-taiwan-User-Guide/archive/v4.0.2.T1.zip" class="nav-link btn-primary" title="Download the User Guide">
                                <i class="glyphicon glyphicon-save"></i> 離線使用手冊
                            </a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://codeigniter4.github.io/api/"
                               class="nav-link btn-success" title="Read them online">
                                <i class="glyphicon glyphicon-book"></i> API 規格書
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3 class="text-center">CodeIgniter 3</h3>

                    <p class="text-center">
                        CodeIgniter3 是穩定版本的框架版本。
                        <br>
                        在
                        <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/license.txt">MIT 授權條款</a>
                        下授權的框架。
                    </p>
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a href="https://codeigniter.org.tw/userguide3/"
                               class="nav-link btn-primary" title="Read it online">
                                <i class="glyphicon glyphicon-book"></i> 線上使用手冊
                            </a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

	</div>
<?= $this->endSection() ?>
