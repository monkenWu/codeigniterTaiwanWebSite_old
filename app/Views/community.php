<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-user big-glyph"></span>
            <p>
                CodeIgniter 是一個由社群開發的開源專案，在社群中提供數種場域讓成員們可以聚集與交流。
            </p>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="alert alert-info" role="alert">
                <p class="text-center">
                    針對安全性的問題應該透過電子郵件向我們的
                    <a href="mailto:security@codeigniter.com">安全團隊</a>
                    反應，而不是在發表在論壇或在 Github 提出問題，謝謝。
                </p>
            </div>
		</div>

		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>論壇</h3>

                    <p>論壇是以 MyBB 建立的，主要有五個分類：</p>

                    <ul>
                        <li>一般（最新消息和討論、休息室、活動和區域使用者組）</li>
                        <li>使用CodeIgniter（選擇CodeIgniter、安裝和設置、模型-視圖-控制器、程式庫與輔助函數、最佳實踐和一般幫助）</li>
                        <li>CodeIgniter 4 (Roadmap, Development, feature requests, support, discussion)</li>
                        <li>開發（CodeIgniter 3.x、CodeIgniter 2.x和相關問題）</li>
                        <li>外部資源（插件、工作、了解更多、關注點）</li>
                    </ul>

                    <p><strong>你可以在論壇中尋求幫助或討論你在使用框架上遇到的問題。</strong></p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-primary" href="<?= esc($mybb_forum_url, 'attr') ?>"><i class="glyphicon glyphicon-share"></i> 造訪論壇</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
                    <h3>Slack</h3>
                    <p>
                        CodeIgniter有一個Slack頻道，你可以在這裡與慎群的其他成員進行交流。任何人都可以
                        <a href="http://codeignitersignup.ciblox.com/">註冊</a>
                        ：)
                    </p>
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-info" href="https://codeigniterchat.slack.com/" target="_blank">
                                <i class="glyphicon glyphicon-share"></i> Slack</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-sm-6">
			<div class="bs-component">
				<div class="well download">
					<h3>GitHub</h3>

                    <p> 我們持續在 GitHub 上進行開發，更多詳情請參閱貢獻頁面。</p>

                    <p><strong>
                        Github 儲存庫是你可以發出錯誤報告（ github 問題）的地方，或者是你可以提交加強或修正框架的拉取請求。 Github並不是支援或幫助你的地方，有這方面需求請使用論壇。
                    </strong></p>

                    <p>關注 Github 問題也可以用來追蹤計劃中的和已批准的補強，通常與特定的版本相關。</p>

                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-info" href="https://github.com/codeigniter4/codeigniter4/" target="_blank">
                                <i class="glyphicon glyphicon-share"></i> CodeIgniter 4</a>
                        </li>
                        <li class="nav-item" style="margin:0.5em;">
                            <a class="nav-link btn-info" href="https://github.com/bcit-ci/CodeIgniter/" target="_blank">
                                <i class="glyphicon glyphicon-share"></i> CodeIgniter 3</a>
                        </li>
                    </ul>
				</div>
			</div>
		</div>

    </div>
</div>
<?= $this->endSection() ?>
