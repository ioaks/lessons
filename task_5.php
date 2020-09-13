<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="/css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="/css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="/css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="/css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="/css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="/css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="/css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="/css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                                <?php
                                    $people = [
                                        [
                                            'surname' => 'Sunny A.',
                                            'profession' => 'UI/UX Expert',
                                            'status' => 'Lead Author',
                                            'img_src' => '/img/demo/authors/sunny.png',
                                            'link' => [
                                                [
                                                    'link_href' => 'https://twitter.com/@myplaneticket',
                                                    'link_content' => '@myplaneticket',
                                                    'link_title' => false
                                                ],
                                                [
                                                    'link_href' => 'https://wrapbootstrap.com/user/myorange',
                                                    'link_content' => '<i class="fal fa-envelope"></i>',
                                                    'link_title' => true
                                                ],
                                            ]
                                        ],
                                        [
                                            'surname' => 'Jos K.',
                                            'profession' => 'ASP.NET Developer',
                                            'status' => 'Partner & Contributor',
                                            'img_src' => '/img/demo/authors/josh.png',
                                            'link' => [
                                                [
                                                    'link_href' => 'https://twitter.com/@atlantez',
                                                    'link_content' => '@atlantez',
                                                    'link_title' => false
                                                ],
                                                [
                                                    'link_href' => 'https://wrapbootstrap.com/user/Walapa',
                                                    'link_content' => '<i class="fal fa-envelope"></i>',
                                                    'link_title' => true
                                                ],
                                            ]
                                        ],
                                        [
                                            'surname' => 'Jovanni L.',
                                            'profession' => 'PHP Developer',
                                            'status' => 'Partner & Contributor',
                                            'img_src' => '/img/demo/authors/jovanni.png',
                                            'link' => [
                                                [
                                                    'link_href' => 'https://twitter.com/@lodev09',
                                                    'link_content' => '@lodev09',
                                                    'link_title' => false
                                                ],
                                                [
                                                    'link_href' => 'https://wrapbootstrap.com/user/lodev09',
                                                    'link_content' => '<i class="fal fa-envelope"></i>',
                                                    'link_title' => true
                                                ],
                                            ]
                                        ],
                                        [
                                            'surname' => 'Roberto R.',
                                            'profession' => 'Rails Developer',
                                            'status' => 'Partner & Contributor',
                                            'img_src' => '/img/demo/authors/roberto.png',
                                            'link' => [
                                                [
                                                    'link_href' => 'https://twitter.com/@sildur',
                                                    'link_content' => '@sildur',
                                                    'link_title' => false
                                                ],
                                                [
                                                    'link_href' => 'https://wrapbootstrap.com/user/sildur',
                                                    'link_content' => '<i class="fal fa-envelope"></i>',
                                                    'link_title' => true
                                                ],
                                            ]
                                        ],
                                    ];
                                    foreach ($people as $person) {
                                        echo '<div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">';
                                            echo '<img src="' . $person['img_src'] . '" alt="' . $person['surname'] . '" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">';
                                            echo '<div class="ml-2 mr-3">';
                                                echo '<h5 class="m-0">' . $person['surname'] . ' (' . $person['profession'] . ')';
                                                    echo '<small class="m-0 fw-300">' . $person['status'] . '</small>';
                                                echo '</h5>';

                                                foreach ($person['link'] as $link) {

                                                    $link_title = '';
                                                    if ($link['link_title']) {
                                                        $link_title = 'title="Contact ' . $person['surname'] . '"';
                                                    }

                                                    $sep = '';
                                                    if (!array_pop($link)) {
                                                        $sep = ' / ';
                                                    }

                                                    echo '<a href="' . $link['link_href'] . '" class="text-info fs-sm" target="_blank" ' . $link_title . '>' . $link['link_content'] . '</a>';
                                                    echo $sep;
                                                }

                                            echo '</div>';
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
