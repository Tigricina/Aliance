<?php
/**
 * Универсальный шаблон заголовка страницы
 */
$show_seporator = $show_seporator ?? true;
$breadcrumbs = $breadcrumbs ?? [];
$header_style = $header_style ?? 'hero-text-only';
$image_url = $image_url ?? '';

?>

<header class="header hero <?= $header_style; ?>">
    <div class="container hero <?= ($header_style === 'hero-with-image') ? 'hero-with-image' : ''; ?>">
        
        <div class="hero-content-wrapper">
            <div class="hero-content">
                <?php if ($show_seporator): ?>
                    <div class="seporator"></div>
                <?php endif; ?>
                
                <h1 class="hero-title">
                    <?= htmlspecialchars($page_title) ?>
                </h1>

                <?php if (!empty($breadcrumbs)): ?>
                    <nav class="breadcrumbs">
                        <?php 
                        $count = count($breadcrumbs);
                        $i = 0;
                        foreach ($breadcrumbs as $item): 
                            $i++;
                            if ($i === $count): 
                        ?>
                                <span class="breadcrumb-current"><?= htmlspecialchars($item['title']) ?></span>
                            <?php else: ?>
                                <a href="<?= htmlspecialchars($item['url']) ?>" class="hero-link"><?= htmlspecialchars($item['title']) ?></a>
                                <span class="breadcrumb-separator">—</span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>
            <!-- /.hero-content -->

            <?php if ($header_style === 'hero-with-image' && $image_url): ?>
                <div class="hero-image-wrapper">
                    <img src="<?= $image_url ?>" alt="<?= htmlspecialchars($page_title) ?>" class="hero-image">
                </div>
            <?php endif; ?>
        </div>
        <!-- /.hero-content-wrapper -->

    </div>
    <!-- /.container -->
</header>
<!-- /.header -->