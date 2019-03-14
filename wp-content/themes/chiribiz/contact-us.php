<?php /* Template Name: contact-us */ ?>

<?php session_start(); 
	if(isset($_POST['code'])) {  
		if($_POST['code'] == $_SESSION['code']){
		    // データは再送信されようとします
			header ('Location: http://localhost/chiribiz/contact-us');
			return;
		}
	}
?>

<?php get_header();?>

	<div id="visual">
		<img src="<?php bloginfo('template_directory') ?>/inc/img/contact-us/contact-us.png" alt="お問い合わせ" width="100%" /> 
	</div>
	<h1 class="white-title">お問い合わせ</h1>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li class="active">
					<a href="javascript:;">内容入力</a>
				</li>
				<li>
					<a href="javascript:;">送信内容確認</a>
				</li>
				<li>
					<a href="javascript:;">完了</a>
				</li>
			</ol>
			<p class="mar_top40">この度はお問合せいただき、誠にありがとうございます。<br>必要な項目をご記入の上、「記入内容を確認」ボタンをクリックしてください。</p>
			<form action="<?php the_permalink(); ?>" class="contact-form" id="myForm" method="POST">
				<div class="contact-item">
					<div class="title">貴社名</div>
					<input type="text" name="your_company" />
				</div>
				<div class="contact-item">
					<div class="title">部署名</div>
					<input type="text" name="your_division" />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>お名前</span>
						<span class="badge">必須</span>
					</div>
					<input type="text" name="your_name" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス</span>
						<span class="badge">必須</span>
					</div>
					<input type="email" name="your_email" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>メールアドレス（確認用）</span>
						<span class="badge">必須</span>
					</div>
					<input type="email" name="your_email_again" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>電話番号</span>
						<span class="badge">必須</span>
					</div>
					<input type="tel" name="your_phone" required />
				</div>
				<div class="contact-item">
					<div class="title">
						<span>お問い合わせ目的</span>
						<span class="badge">必須</span>
					</div>
					<div class="radio-area">
						<label class="radio-label">
							<input type="radio" name="your_type" value="未来商圏トライアル" required />
							<div class="radio-widget"></div>
							<span>未来商圏トライアル</span>
						</label>
						<label class="radio-label">
							<input type="radio" name="your_type" value="テクニカルサポート" required />
							<div class="radio-widget"></div>
							<span>テクニカルサポート</span>
						</label>
						<label class="radio-label">
							<input type="radio" name="your_type" value="製品に関すること" required />
							<div class="radio-widget"></div>
							<span>製品に関すること</span>
						</label>
						<label class="radio-label">
							<input type="radio" name="your_type" value="その他" required />
							<div class="radio-widget"></div>
							<span>その他</span>
						</label>
					</div>
				</div>
				<div class="contact-item">
					<div class="title">お問い合わせ内容</div>
					<textarea cols="30" rows="15" name="your_message"></textarea>
				</div>
				<input name="code" type="hidden" value="<?php echo rand(10000,100000000000); ?>" />
				<div class="center-button" id="nextButton">
					<button class="green-button" onclick="goComfirm(this, event)">記入内容を確認する</button>
				</div>
				<div class="center-button" id="comfirmButtons" hidden>
					<button class="green-button" onclick="goBack(this, event)">戻る</button>
					<input type="submit" class="green-button" name="your_submit" onclick="goSend(this, event)" value="送信" />
				</div>
			</form>
			<p>
			<?php 
				require_once "inc/lib/phpmailer/class.phpmailer.php";
				

				if (!empty($_POST['your_submit'])){
					$_SESSION['code']=$_POST['code'];

					$company = htmlspecialchars($_POST['your_company']);
					$division = htmlspecialchars($_POST['your_division']);
					$name = htmlspecialchars($_POST['your_name']);
					$mail = htmlspecialchars($_POST['your_email']);
					$mailConfrim = htmlspecialchars($_POST['your_email_again']);
					$phone = htmlspecialchars($_POST['your_phone']);
					$type = htmlspecialchars($_POST['your_type']);
					$message = htmlspecialchars($_POST['your_message']);

					$mailBodyTop_user='';
					$mailSubject_user='';
					$mailUsername='';
					$mailPassword='';

					$mailSubject_admin='';
					$mailBodyBottom_admin='';
					$mailTo_admin='';

					if($type=='未来商圏トライアル'){
						//お客様へ
						$mailUsername='inquiry.workcapital@gmail.com';
						$mailPassword='contactwc180623@';
						// $mailUsername='ask@chiri.biz';
						// $mailPassword='kawa^saki';
						$mailSubject_user='無料トライアルへのお申込ありがとうございます';
						$mailBodyTop_user=
							'この度は未来商圏レポートの無料トライアルにお申込みいただき、誠にありがとうございます。'."<br><br>".

							'下記の内容でお申込を承りました。'."<br>".
							'弊社にて確認の上、追って担当者より回答申し上げます。'."<br>".
							'3営業日以内にパスワード等をご連絡いたします。'."<br>".
							'（それ以上回答が遅れた場合は、お手数ですが再度ご請求ください。）'."<br><br>".

							'よろしくお願いいたします。';
						//担当先へ
						$mailSubject_admin='未来商圏無料トライアルの申込がありました';
						$mailTo_admin='ianchen0419@gmail.com';
						// $mailTo_admin='ask@chiri.biz';

					}else if($type=='テクニカルサポート'){
						//お客様へ
						$mailUsername='inquiry.workcapital@gmail.com';
						$mailPassword='contactwc180623@';
						// $mailUsername='techsupport@chiri.biz';
						// $mailPassword='vertexsystem';
						$mailSubject_user='テクニカルサポートへのお問い合わせを承りました';
						$mailBodyTop_user=
							'この度は株式会社楽しいチリビジのテクニカルサポートにお問い合わせをいただきまして、誠にありがとうございます。'."<br>".
							'下記の内容でお問い合わせを承りました。'."<br>".
							'追って、担当者より回答申し上げます。
							しばらくお待ちください。';
						//担当先へ
						$mailSubject_admin='テクニカルサポートの申込がありました';
						$mailBodyBottom_admin=
							'株式会社楽しいチリビジ'."<br>".
							'テクニカルサポート問合せフォームより'."<br>".
							'techsupport@chiri.biz';
						$mailTo_admin='ianchen0419@gmail.com';
						// $mailTo_admin='techsupport@chiri.biz';

					}else {
						//お客様へ
						$mailUsername='inquiry.workcapital@gmail.com';
						$mailPassword='contactwc180623@';
						// $mailUsername='ask@chiri.biz';
						// $mailPassword='kawa^saki';
						$mailSubject_user='お問い合わせありがとうございました';
						$mailBodyTop_user=
							'この度は株式会社楽しいチリビジにお問い合わせをいただきまして、誠にありがとうございます。'."<br>".
							'下記の内容でお問い合わせを承りました。'."<br>".
							'追って、担当者より回答申し上げます。
							しばらくお待ちください。';
						//担当先へ
						$mailSubject_admin='問い合わせがありました';
						$mailTo_admin='ianchen0419@gmail.com';
						// $mailTo_admin='ask@chiri.biz';
					}

					$mailer_user = new PHPMailer();
					$mailer_user->SMTPSecure = "ssl";
					$mailer_user->Host = "smtp.gmail.com";
					$mailer_user->Port = 465;
					$mailer_user->CharSet = "utf-8";    
					$mailer_user->Username = $mailUsername;     
					$mailer_user->Password = $mailPassword;
					$mailer_user->IsSMTP();
					$mailer_user->SMTPAuth = true;
					$mailer_user->SMTPDebug  = 1;
					$mailer_user->Encoding = "base64";
					$mailer_user->IsHTML(true);   
					$mailer_user->FromName = "株式会社楽しいチリビジ";  
					$mailer_user->Subject = $mailSubject_user; 
					$mailer_user->Body = 
						$company.'株式会社'."<br>".
						$name.'様'."<br><br>".
						$mailBodyTop_user."<br><br><br><br>".
						'---'."<br><br>".
						'【貴社名】'.$company."<br>".
						'【部署名】'.$division."<br>".
						'【お名前】'.$name."<br>".
						'【メールアドレス】'.$mail."<br>".
						'【メールアドレス（確認用）】'.$mailConfrim."<br>".
						'【電話番号】'.$phone."<br>".
						'【お問い合わせ目的】'.$type."<br>".
						'【お問い合わせ内容】'."<br>".$message."<br><br>".
						'---'."<br><br><br><br>".
						'株式会社楽しいチリビジ'."<br>".
						'ask@chiri.biz';       
					$mailer_user->AddAddress($mail); 


					$mailer_admin = new PHPMailer();
					$mailer_admin->SMTPSecure = "ssl";
					$mailer_admin->Host = "smtp.gmail.com";
					$mailer_admin->Port = 465;
					$mailer_admin->CharSet = "utf-8";    
					$mailer_admin->Username = $mailUsername;     
					$mailer_admin->Password = $mailPassword;
					$mailer_admin->IsSMTP();
					$mailer_admin->SMTPAuth = true;
					$mailer_admin->SMTPDebug  = 1;
					$mailer_admin->Encoding = "base64";
					$mailer_admin->IsHTML(true); 
					$mailer_admin->AddReplyTo($mail);
					$mailer_admin->FromName = "株式会社楽しいチリビジ";  
					$mailer_admin->Subject = $mailSubject_admin; 
					$mailer_admin->Body = 
						'担当各位'."<br><br>".
						'下記内容で問い合わせがありました。'."<br><br><br><br>".
						'---'."<br><br>".
						'【貴社名】'.$company."<br>".
						'【部署名】'.$division."<br>".
						'【お名前】'.$name."<br>".
						'【メールアドレス】'.$mail."<br>".
						'【メールアドレス（確認用）】'.$mailConfrim."<br>".
						'【電話番号】'.$phone."<br>".
						'【お問い合わせ目的】'.$type."<br>".
						'【お問い合わせ内容】'."<br>".$message."<br><br>".
						'---'."<br><br><br><br>".
						$mailBodyBottom_admin;       
					$mailer_admin->AddAddress($mailTo_admin);

					if($mailer_user->Send()){
						if($mailer_admin->Send()){
							echo '送信しました'; ?>
							<script>
								myForm.hidden=true;
								document.querySelector('.contact-path li.active').classList.remove('active');
								document.querySelectorAll('.contact-path li')[2].classList.add('active');
							</script>
						
						<?php }else{
							echo '失敗しました';	
						}
						
					
					} 
				} 
			?>

			
			</p>
			
		</div>

	</main>

<?php get_footer();?>
