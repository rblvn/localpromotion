<?php get_header();?>

<?php

/* Template name: partner */

?>

<?php get_template_part( '/template-parts/main-banner' ); ?>

<main class="new-page">
    <div class="sandwich-title-wrapper">
        <div class="container container_flex">
            <div class="sandwich-title">
			<h2 class="program-h1">За что мы платим?</h2>
            </div>
        </div>
    </div>
    <div class="gird-vacancies-wrapper">
        <div class="container container_flex">
            <div class="gird-vacancies top-vacancies">
                <div class="vacancies-item">
                    <div class="vacancies-text">Мы платим до 20% от всех оплат клиента, пришедшего по вашей рекомендации. </div>
                </div>
                <div class="vacancies-item">
					<div class="vacancies-text">Зарегистрируйтесь в партнерской программе прямо сейчас</div>
					<button class="program-btn"  data-fancybox="" data-src="#callme">Зарегистрироваться</button>
				</div>
            </div>
        </div>
    </div>

	<div class="container container_flex">
		<section class="program">
		<div class="container">
			<h2 class="program-h1">Как начать зарабатывать?</h2>
			<div class="program-row">
				<div class="col-fill">
					<div class="program-image">
						<img src="/wp-content/uploads/2020/09/prioritize.svg" alt="">
					</div>
					<div class="program-text">
						<div class="program-title">Зарегистрируйтесь</div>
						<div class="program-inner">Отправьте нам на почту свой email, Viber, Telegram или Whatsapp.</div>
						<button class="program-btn"  data-fancybox="" data-src="#callme">Регистрация</button>
					</div>
				</div>
				<div class="col-empty">

				</div>
			</div>
			<div class="program-row">
				<div class="col-empty">

				</div>
				<div class="col-fill">
					<div class="program-image">
						<img src="/wp-content/uploads/2020/09/partnership.svg" alt="">
					</div>
					<div class="program-text">
						<div class="program-title">Привлекайте</div>
						<div class="program-inner">Рекомендуйте нас своим знакомым и клиентам или разместите готовый баннер на своем сайте.</div>
					</div>
				</div>
			</div>
			<div class="program-row">
				<div class="col-fill">
					<div class="program-image">
						<img src="/wp-content/uploads/2020/09/economy.svg" alt="">
					</div>
					<div class="program-text">
						<div class="program-title">Зарабатывайте</div>
						<div class="program-inner">Получайте доход с платежей клиента до 20%</div>
					</div>
				</div>
				<div class="col-empty">

				</div>
			</div>
			<!-- <div class="program-row">
				<div class="col-empty">

				</div>
				<div class="col-fill">
					<div class="program-image">
						<img src="images/economy.svg" alt="">
					</div>
					<div class="program-text">
						<div class="program-title">Зарегистрируйтесь</div>
						<div class="program-inner">Создайте аккаунт вебмастера. Мы отправим ваш ID и реферальную ссылку на указанный e-mail.</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>
	</div>


    <?php get_template_part( '/template-parts/contact' ); ?>

</main>

<?php get_footer(); ?>
