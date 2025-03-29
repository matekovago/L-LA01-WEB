<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/bootstrap.min.css" type="text/css">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>
<body>
<!--
	<header>
		<img src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
-->


<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
	<div class="container-fluid">
    		<a class="navbar-brand" href="./">Telefon nyílvántartó</a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav me-auto mb-2 mb-md-0">
						<?php foreach ($oldalak as $url => $oldal) { ?>
							<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
								<li class="nav-item" >
								<a <?= (($oldal == $keres) ? ' class="nav-link active"' : 'class="nav-link"') ?> href="<?= ($url == '/') ? '.' : ('?' . $url) ?>">
								<?= $oldal['szoveg'] ?></a>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
					<?php if(isset($_SESSION['login'])) { ?>

						<div class="d-flex">
						<button type="button" class="btn btn-success">Bejelentkezett: <?= $_SESSION['csn']?> <?= $_SESSION['un']?>(<?= $_SESSION['login']?>)</button>
						</div>
					<?php  } ?>
				</div>
					</div>
				</nav>


<div id="content">
    <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
</div>

    <footer>
		<div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
			<div class="container">
				<?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
				&nbsp;
				<?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
			</div>
		</div>
    </footer>
<script src="./styles/bootstrap.bundle.min.js"></script>
</body>
</html>