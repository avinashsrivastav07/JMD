<?php
require_once("phpmailer/PHPMailerAutoload.php");
              $mail = new PHPMailer();
			  
			  $subject = 'Customer Details :';
			  $body = '<p>Customer Details :</p>
							<p>With Regards, </p>
							<p><strong>Name : </strong>'.$name.'</p>
							<p><strong>Email : </strong>'.$email.'</p>
							<p><strong>Contact : </strong>'.$contact.'</p>
							<p><strong>Message : </strong>'.$message.'</p>';

              $mailhost = "smtp.gmail.com";
              $smtpUser = "techmo46@gmail.com";
              $smtpPassword = "9678218733";
			  
			  
			  $toEmail ="techmo46@gmail.com";
			  $from = 'techmo46@gmail.com';
			  $name = 'techsoft';
			  
                $mail->IsSMTP();
                $mail->Host = $mailhost;
                $mail->SMTPAuth = true;
                $mail->Username = $smtpUser;
                $mail->Password = $smtpPassword;
                $mail->SMTPSecure = "ssl";
				$mail->SMTPDebug = 2;				//ssl or tls
                $mail->Port = 465; // 25 or 465 or 587
 
                $mail->From = $from;
                $mail->FromName = $name;
                $mail->AddReplyTo($from);
                $mail->AddAddress($toEmail);
                $mail->IsHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $body;
				
				 if(!$mail->Send()){
					  echo 'Message Failed !';
                  }