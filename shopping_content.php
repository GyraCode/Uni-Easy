<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="zh">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="csss/normalize.css" />
	<!--CSS RESET-->
	<link rel="stylesheet" type="text/css" href="csss/htmleaf-demo.css">
	<!--演示页面样式，使用时可以不引用-->
	<link rel="stylesheet" href="csss/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style>
		body {
			background-color: #1A130C;
		}

		.ui-big-image .article {
			display: flex;
			flex-wrap: nowrap;
		}

		.ty-p2-left {
			margin-left: 100px;
		}

		.ty-p2-left h1,
		.ty-p2-left p {
			color: aliceblue;
		}

		.ty-p2-left h2 {
			margin-top: 10px;
			color: brown;
		}

		.ty-p2-left p {
			margin-top: 30px;
			line-height: 2.5;
		}

		.ty-p2-right img {
			width: 60%;

		}

		/* .ty-p2-right .bg1 {
			width: 350px;
			height: 350px;
			background-color: brown;
			margin-top: 60px;
			margin-left: 50px;

		} */

		@media (max-width:375px) {
			.ty-p2-right img {
				width: 60%;

			}

			.ui-big-image .article {
				display: flex;
				flex-wrap: wrap;
			}

			.ty-p2-left {
				margin-left: 0;
			}

			.ty-p2-left h1 {
				font-size: 30px;
			}

			.ty-p2-left p {
				color: aliceblue;
				font-size: 14px;
				line-height: 1.5;
				margin-top: 0;
			}

			.ui-articles {
				height: 250px;
			}
		}
	</style>
</head>

<body>
	<div id="app" data-state="0">
		<div class="ui-big-images">
			<div class="ui-big-image" data-key="0">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>男性服飾</h1>
						<h2>MEN,S CLOTHING</h2>
						<p>為什麼訓練的同時，外在那麼重要呢？我認為這對自己、對別人<br>
							都是一種尊重，也像我在【健身房搭訕技巧與心態】不要讓內向<br>
							限制了你這篇文章所說，最好是隨時準備好來個豔遇。<br>

							目前在隨便上網爬文一下，就有太多太多的健身服裝品牌可以選擇<br>
							，有很多歐美代購、也有很多大型運動老品牌、甚至有琳瑯滿目的<br>
							台灣小眾品牌。<br>

							今天會以適合新手與小資族這兩個族群來切入分享，幫助你們快速<br>
							找到適合自己的健身房穿搭風格。</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/young-man-training-gym.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="ui-big-image" data-key="1">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>女性服飾</h1>
						<h2>Women's clothing</h2>
						<p>去健身房或日常跑步時，常有人煩惱該穿什麼樣的衣服訓練才好？平時穿的T恤衫<br>和短褲雖然容易活動，但吸汗力、速乾性卻不夠好。另外，從一開始穿合身運動用<br>的衣服，可能會感到不自在，建議挑選容易活動、機能好、時尚性高的運動服，<br>並選擇適合自己風格的服裝。以下介紹運動服的種類。

							運動時的衣服沒有特別規定形式，<br>只要是容易運動的，穿什麼都可以，不一定要穿運動專用服裝。常見的有T恤、背心<br>和短褲的組合，或者運動衫或運動服的搭配。初期多穿著家裡原有的衣服，較能隱藏身體線條，<br>但是養成運動習慣、對身材較有信心的話，可以考慮合身的運動服裝。
						</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/woman-doing-sport-home.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="ui-big-image" data-key="2">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>有氧商品</h1>
						<h2>Aerobic products</h2>
						<p>
							有氧運動(Aerobic exercise或
							Cardio)，又可稱之為有氧訓練、需氧運動、帶氧運動，<br>而在進行這類運動時，呼吸是呈現規律性的呼氣與吸氣，肌肉方面亦呈現規律性的緊張<br>與放鬆相互交替。

							人體在運動時會需要ATP三磷酸腺苷來提供能量，而人體預存的ATP<br>能量只能維持15秒，則接下來的90-120秒，就必須由血糖在無氧狀態下，合成ATP來提供能量。<br>在90-120秒之後，則會由血液中的糖分、脂肪酸、胺基酸等營養分子，在有氧狀態下，<br>合成ATP來提供熱量。因此，所謂的有氧運動，指的是持續超過90-120秒，<br>必須由有氧代謝合成能量的運動。

							以上是對於有氧運動比較理論式的解說。
						</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/smiling-woman-with-smartphone-race-track.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="ui-big-image" data-key="3">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>瑜珈商品</h1>
						<h2>Yoga goods</h2>
						<p>瑜珈，以舒緩壓力和讓人放鬆的功能，區隔出特性，例如：冥想、伸展，可以控制<br>壓力的有效方法。而多項研究表示，瑜珈可以減少皮質醇的分泌。

							小編給大家長點知識，<br>所謂的皮質醇，是人在面對壓力的時候就會分泌「皮質醇」，用來調節身體對外來刺激的反應，<br>可以增加新陳代謝，所以短暫的壓力是健康的。但是長期處於皮質醇分泌多(高於水平)，<br>就會有許多健康問題產生，像是：疲勞、焦慮、抑鬱、內分泌失調、高血壓、心腦血管疾病、<br>免疫系統失調…等，都是現代人最常見的文明病。

							身體發炎是一種正常的免疫反應，<br>但慢性炎症可能導致促其他疾病的發生，如：心血管疾病、糖尿病、阿茲海默症和癌症…等。<br>
						</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/woman-stretching-one-leg-sport-home-concept.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="ui-big-image" data-key="4">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>增肌商品</h1>
						<h2>Retrained goods</h2>
						<p>為什麼訓練的同時，外在那麼重要呢？我認為這對自己、對別人<br>
							都是一種尊重，也像我在【健身房搭訕技巧與心態】不要讓內向<br>
							限制了你這篇文章所說，最好是隨時準備好來個豔遇。<br>

							目前在隨便上網爬文一下，就有太多太多的健身服裝品牌可以選擇<br>
							，有很多歐美代購、也有很多大型運動老品牌、甚至有琳瑯滿目的<br>
							台灣小眾品牌。<br>

							今天會以適合新手與小資族這兩個族群來切入分享，幫助你們快速<br>
							找到適合自己的健身房穿搭風格。</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/side-view-woman-doing-sports-home.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="ui-big-image" data-key="5">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>配件商品</h1>
						<h2>Accessory goods</h2>
						<p>在運動時，大多都是1-2個小時起跳，這時配件的功用性就非常的大了，<br>像是隨身有水壺，毛巾等等之類的，甚至是在運動健身時，想隨時隨地<br>看到時間或是再做一些激烈運動無法看到時間，運動手錶就在這時就非常需要，<br>還有運動時必備的音樂，有些配件是能搭配你的手機去做媒合的，像是手機套<br>或是耳機的連動，都是配件在運動時候必要性，即時的補充水分和在冷氣房內健身，<br>無論是朋友交際把運動時的汗水即時擦拭，都是相當重要的，還有最後最重要的就是運動完，<br>
							立馬來一杯自己沖泡的高蛋白，即時的補充蛋白質，相當的立即且重要!!</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/young-fit-woman-ready-workout.jpg" alt="">
					</div>
				</div>
			</div>

			<div class="ui-big-image" data-key="6">
				<div class="article row">
					<div class="ty-p2-left d-flex flex-column col-12 col-lg-6">

						<h1>補給商品</h1>
						<h2>Supply goods</h2>
						<p>
							高蛋白粉跟高蛋白質食物各有好處，就主要營養素來講兩者是沒什麼差的，像是一塊雞肉、<br>一份豬肝、一份瘦的牛肉，跟一份高蛋白粉大概都是20-30克蛋白質。

							差別就在於說真正的食<br>物中有許多的微量營養素(維生素、礦物質)，而高蛋白粉就是加工食品，裡面除了高蛋白質<br>以外沒什麼其他的微量營養素。就算有些高蛋白粉會加一些有的沒的微量元素，要比營養的話<br>一定是真正的食物會贏。

							但高蛋白粉的優勢是，很方便、很便宜、很快吸收、很升胰島素。<br>

							特定的蛋白粉，像是濃縮乳清蛋白粉還有分離式蛋白粉，讓身體吸收很快、分泌較多胰島素，<br>可以更快的把養分送進細胞中。

							高蛋白粉的缺點剛剛也說過了，就是缺少了真的食物含有的<br>營養價值，較沒有飽足感。</p>

					</div>

					<div class="ty-p2-right col-12 col-lg-6">
						<div class="bg1"></div>
						<img src="./img/sport-equipment.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="ui-thumbnails">
			<div class="ui-thumbnail" tabindex="-1" data-key="0">
				<img src="./img/young-man-training-gym.jpg" alt="" />
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
			<div class="ui-thumbnail" tabindex="-1" data-key="1">
				<img src="./img/woman-doing-sport-home.jpg" alt="" />
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
			<div class="ui-thumbnail" tabindex="-1" data-key="2">
				<img src="./img/smiling-woman-with-smartphone-race-track.jpg" alt="" />
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
			<div class="ui-thumbnail" tabindex="-1" data-key="3">
				<img src="./img/woman-stretching-one-leg-sport-home-concept.jpg" alt="" />
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
			<div class="ui-thumbnail" tabindex="-1" data-key="4">
				<img src="./img/side-view-woman-doing-sports-home.jpg" alt="" />
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
			<div class="ui-thumbnail" tabindex="-1" data-key="5">
				<img src="./img/young-fit-woman-ready-workout.jpg" alt="" style="width:50%">
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
			<div class="ui-thumbnail" tabindex="-1" data-key="6">
				<img src="./img/sport-equipment.jpg" alt="" />
				<div class="ui-cuticle" data-flip-key="cuticle"></div>
			</div>
		</div>
		<div class="ui-content">

			<nav class="ui-nav">
				<button id="prev" tabindex="-1" title="Previous">&lt;</button>
				<button id="next" tabindex="-1" title="Next">&gt;</button>
			</nav>

			<div class="ui-articles">
				<article class="ui-article" data-key="0">
					<h2 class="ui-heading">男性服飾</h2>
					<p class="ui-paragraph">MEN,S CLOTHING
					</p>
				</article>
				<article class="ui-article" data-key="1">
					<h2 class="ui-heading">女性服飾</h2>
					<p class="ui-paragraph">Women's clothing</p>
				</article>
				<article class="ui-article" data-key="2">
					<h2 class="ui-heading">有氧商品</h2>
					<p class="ui-paragraph">Aerobic products</p>
				</article>
				<article class="ui-article" data-key="3">
					<h2 class="ui-heading">瑜珈商品</h2>
					<p class="ui-paragraph">Yoga goods</p>
				</article>
				<article class="ui-article" data-key="4">
					<h2 class="ui-heading">重訓商品</h2>
					<p class="ui-paragraph">Retrained goods </p>
				</article>
				<article class="ui-article" data-key="5">
					<h2 class="ui-heading">配件商品</h2>
					<p class="ui-paragraph">Accessory goods</p>
				</article>
				<article class="ui-article" data-key="6">
					<h2 class="ui-heading">補給商品</h2>
					<p class="ui-paragraph">Supply goods</p>
				</article>
			</div>
		</div>
	</div>

	<script src='https://unpkg.com/flipping@1.1.0/dist/flipping.web.js'></script>
	<script>
		console.clear();

		const elPrevButton = document.querySelector('#prev');
		const elNextButton = document.querySelector('#next');
		const flipping = new Flipping();

		const elImages = Array.from(document.querySelectorAll('.ui-big-image'));
		const elThumbnails = Array.from(document.querySelectorAll('.ui-thumbnail'));

		let state = {
			photo: 0
		};

		function send(event) {
			// read cuticle positions
			flipping.read();

			const elActives = document.querySelectorAll('[data-active]');

			Array.from(elActives)
				.forEach(el => el.removeAttribute('data-active'));

			switch (event) {
				case 'PREV':
					state.photo--;
					// Math.max(state.photo - 1, 0);
					break;
				case 'NEXT':
					state.photo++;
					// Math.min(state.photo + 1, elImages.length - 1);
					break;
				default:
					state.photo = +event;
					break;
			}

			var len = elImages.length;
			// Loop Around
			//state.photo = ( ( state.photo % len) + len ) % len;
			state.photo = Math.max(0, Math.min(state.photo, len - 1));

			Array.from(document.querySelectorAll(`[data-key="${state.photo}"]`))
				.forEach(el => {
					el.setAttribute('data-active', true);
				});

			// execute the FLIP animation
			flipping.flip();
		}

		elThumbnails.forEach(thumb => {
			thumb.addEventListener('click', () => {
				send(thumb.dataset.key);
			});
		});

		elPrevButton.addEventListener('click', () => {
			send('PREV');
		});

		elNextButton.addEventListener('click', () => {
			send('NEXT');
		});

		send(0);
	</script>
</body>

</html>