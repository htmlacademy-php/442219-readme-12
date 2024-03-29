<?php
/**
 * View page popular posts
 *
 * @var string $popular_posts HTML popular posts
 * @var array $types Type posts
 * @var string $type_id ID type from GET request
 * @var string $posts_sort Method of sorting posts
 */
?>
<section class="page__main page__main--popular">
    <div class="container">
        <h1 class="page__title page__title--popular">Популярное</h1>
    </div>
    <div class="popular container">
        <div class="popular__filters-wrapper">
            <div class="popular__sorting sorting">
                <b class="popular__sorting-caption sorting__caption">Сортировка:</b>
                <ul class="popular__sorting-list sorting__list">
                    <li class="sorting__item sorting__item--popular">
                        <a class="sorting__link <?php if ($posts_sort === 'popular'): ?>sorting__link--active<?php endif; ?>" href="index.php?sort=popular">
                            <span>Популярность</span>
                            <svg class="sorting__icon" width="10" height="12">
                                <use xlink:href="#icon-sort"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="sorting__item">
                        <a class="sorting__link <?php if ($posts_sort === 'like'): ?>sorting__link--active<?php endif; ?>" href="index.php?sort=like">
                            <span>Лайки</span>
                            <svg class="sorting__icon" width="10" height="12">
                                <use xlink:href="#icon-sort"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="sorting__item">
                        <a class="sorting__link <?php if ($posts_sort === 'date'): ?>sorting__link--active<?php endif; ?>" href="index.php?sort=date">
                            <span>Дата</span>
                            <svg class="sorting__icon" width="10" height="12">
                                <use xlink:href="#icon-sort"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="popular__filters filters">
                <b class="popular__filters-caption filters__caption">Тип контента:</b>
                <ul class="popular__filters-list filters__list">
                    <li class="popular__filters-item popular__filters-item--all filters__item filters__item--all">
                        <a class="filters__button filters__button--ellipse filters__button--all <?php if (!$type_id): ?>filters__button--active<?php endif; ?>" href="?type=0">
                            <span>Все</span>
                        </a>
                    </li>
                    <?php foreach($types as $type): ?>
                    <li class="popular__filters-item filters__item">
                        <a class="filters__button filters__button--<?= $type['alias']; ?> button <?php if ((int)$type_id === $type['id']): ?>filters__button--active<?php endif; ?>" href="?type=<?= $type['id'] ?>">
                            <span class="visually-hidden"><?= $type['title']; ?></span>
                            <svg class="filters__icon" width="22" height="18">
                                <use xlink:href="#icon-filter-<?= $type['alias']; ?>"></use>
                            </svg>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="popular__posts">
            <?= $popular_posts; ?>
        </div>
    </div>
</section>
