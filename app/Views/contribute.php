<?= $this->extend('theme/template') ?>

<?= $this->section('content') ?>
<div class="container">
	<div class="row">

		<div class="col-md-12 col-sm-12 text-center title">
			<span class="glyphicon glyphicon-heart big-glyph"></span>
			<p>貢獻至 CodeIgniter</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
            <p>
                CodeIgniter 是一個社群促使開發的專案，接受來自社群的程式碼與使用手冊的貢獻。這些貢獻以發出問題或拉取請求的形式在 GitHub 上的
                <a href="https://github.com/bcit-ci/CodeIgniter">CodeIgniter 儲存庫</a>
                中提交。
            </p>

            <p>
                發出問題是一種快速指出 BUG 的方法，如果你在 CodeIgniter 或 使用手冊發現了錯誤，那麼請你先檢查幾件事：
            </p>

            <ul>

                <li>是否從未有人針對這個錯誤發出問題</li>
                <li>這個問題是否已經被修復了（查看分支或尋找已經被關閉的問題）</li>
                <li>是不是真的有很明顯的問題需要你去解決？</li>
                <li>如果你不確定你的使用方法不正確，或是你真的發現了 BUG ，煩請先至論壇上<a href="<?= $mybb_forum_url ?>/forum-19.html">詢問</a>。
                </li>
            </ul>

            <p>
                問題回報是非常用的方法，但更好的方案是透過分叉主儲存庫並提交修改到你自己的副本中，再回到 GitHub 發送拉取請求（這需要你使用 Git 版本控制系統）。
            </p>

            <p>
                上面的兩個 GitHub 連結是 CodeIgniter 3 儲存庫的連接。一旦 CodeIgniter 4 正式推出後，它們將被替換成 CodeIgniter 4 的儲存庫的連接。
            </p>
            <br/>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>CodeIgniter 4</h3>
                    <p>
                        CodeIgniter 4 有自己的
                        <a href="https://github.com/codeigniter4/CodeIgniter4">Github 儲存庫</a>。
                        因為它與 CodeIgniter 3 有十分大的差距，所以我們希望將它們分開。
                    </p>

                    <p>
                        CodeIgniter 4的路線圖已經在
                        <a href="http://forum.codeigniter.com/forum-28.html">我們的論壇</a>
                        上說明了，預定的工作項目也在
                        <a href="https://github.com/codeigniter4/CodeIgniter4/issues">儲存庫的問題</a>
                        中詳細說明了。
                    </p>
                </div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="alert alert-info" role="alert">
                <p>
                    安全問題應該透過電子郵件向我們的安全團隊告知，而不是在論壇上提出或在 Github 發出問題，謝謝! 關於這個問題，你可以閱讀關於
                    <a href="/contribute/responsible">「揭露者責任」</a>
                    的內容。
                </p>
            </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>如果你不是開發者，你也可以......</h3>
					<div class="list-group">
						<div class="list-group-item">
                            <h4>測試人員</h4>
                            <p>
                                我們非常需要意見回饋，告訴我們那些功能好用、哪些不好用。大部分的開發工作即將進入第三版，現在我們非常需要回饋。如果你發現了一些肯定是錯誤的問題，並且你也是 Github 的使用者，請建立一個新的「問題」。如果你不是 Github 的使用者但你發現了錯誤，請到論壇中的
                                <a href="https://forum.codeigniter.com/forum-19.html">問題板塊</a>
                                建立一個新的討論。
                            </p>
                            <p><strong>CodeIgniter 4 有自己的 <a href="https://forum.codeigniter.com/forum-30.html">支援板塊</a>。</strong></p>
                        </div>
						<div class="list-group-item">
                            <h4>文章寫手</h4>
                            <p>
                                每個專案都需要好的文件！ CodeIgniter 
                                <a href="https://github.com/bcit-ci/CodeIgniter">使用手冊</a>
                                都會是 Github 專案中的一部分，其中含有許多關於框架知識的教學。而 CodeIgniter 4 的使用手冊也是一樣的，它也位於自己的
                                <a href="https://github.com/codeigniter4/CodeIgniter4">儲存庫</a>
                                的之中。
                            </p>
                            <p>
                                CodeIgniter4 的正體中文使用手冊正在翻譯中，你也可以前往我們的
                                <a href="https://github.com/monkenWu/codeIgniter4-taiwan-User-Guide"> 儲存庫</a>
                                參與我們的翻譯計畫！
                            </p>
                        </div>
						<div class="list-group-item">
                            <h4>宣傳者</h4>
                            <p>
                                我們認為 CodeIgniter 可以讓更多專案變得更好 ：），你可以透過活躍在論壇回答問題，或者在其他的開發者社群中推廣 CodeIgniter 的好來幫助我們推廣這個框架。
                            </p>
                        </div>
						<div class="list-group-item">
                            <h4>版主</h4>
                            <p>
                                版主是論壇中重要的存在，他能保證討論維持在一定的主題上，並適時地清除不適當的言論與使用者。
                            </p>
                        </div>
						<div class="list-group-item">
                            <h4>設計師</h4>
                            <p>
                                我們歡迎大家對網站、使用手冊與論壇提出設計上的建議。歡迎大家在 Github 儲存庫中參與專案，並協助我們精進這些設計。
                            </p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>開發相關人員</h3>
					<div class="list-group">
						<div class="list-group-item">
                            <h4>開發者</h4>

                            <p>
                                如果你想參與 CodeIgniter 下一個版本的開發，請在
                                <a href="https://github.com/codeigniter4/CodeIgniter4">Github</a>
                                中加入我們，在使用手冊裡有有詳細的
                                <a href="/user_guide/extending/contributing.html">貢獻方法</a>，
                                以及
                                <a href="https://github.com/codeigniter4/CodeIgniter4/blob/develop/contributing/styleguide.rst">程式碼撰寫風格</a>。
                            </p>
                        </div>
						<div class="list-group-item">
                            <h4>程式碼審查者</h4>
                            <p>
                                每個專案都需要一個核心的開發者小組，熟悉專案的所有標準與規範，並協助審查社群提交的程式碼與錯誤修正。我們的核心小組已經幸運地走到了今天，我們希望可以再多招募一些夥伴。
                            </p>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- Acknowledge contributors -->
		<div class="col-md-12 col-sm-12">
			<div class="bs-component">
				<div class="well download">
					<h3>由衷感謝傑出的貢獻者們：</h3>
					<h4>... CodeIgniter 3</h4><br/>
					<div class="row"><?= $fw_heros ?></div>
					<h4>... CodeIgniter 3 translations</h4><br/>
					<div class="row"><?= $trans_heros ?></div>
					<h4>... CodeIgniter4</h4><br/>
					<div class="row"><?= $ci4_heros ?></div>
					<h4>... CodeIgniter 4 translations</h4><br/>
					<div class="row"><?= $trans4_heros ?></div>
					<h4>... our original Website</h4><br/>
					<div class="row"><?= $web_heros ?></div>
					<h4>... our revised Website (CI4)</h4><br/>
					<div class="row"><?= $new_web_heros ?></div>
				</div>
			</div>
		</div>
	</div>

</div>
<?= $this->endSection() ?>
