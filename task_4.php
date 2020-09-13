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
                            <?php
                                $tasks = [
                                    [
                                        'title' => 'My Tasks',
                                        'progress' => '130 / 500',
                                        'bg' => 'fusion-400',
                                        'style_width' => '65%',
                                        'aria_valueNow' => '65',
                                        'aria_valueMin' => 0,
                                        'aria_valueMax' => 100,
                                        'item_title_margin' => 'mt-2',
                                        'progress_margin' => 'mb-3'
                                    ],
                                    [
                                        'title' => 'Transfered',
                                        'progress' => '400 TB',
                                        'bg' => 'success-500',
                                        'style_width' => '34%',
                                        'aria_valueNow' => '34',
                                        'aria_valueMin' => 0,
                                        'aria_valueMax' => 100,
                                        'item_title_margin' => false,
                                        'progress_margin' => 'mb-3'
                                    ],
                                    [
                                        'title' => 'Bugs Squashed',
                                        'progress' => '77%',
                                        'bg' => 'info-400',
                                        'style_width' => '77%',
                                        'aria_valueNow' => '77',
                                        'aria_valueMin' => 0,
                                        'aria_valueMax' => 100,
                                        'item_title_margin' => false,
                                        'progress_margin' => 'mb-3'
                                    ],
                                    [
                                        'title' => 'User Testing',
                                        'progress' => '7 days',
                                        'bg' => 'primary-300',
                                        'style_width' => '84%',
                                        'aria_valueNow' => '84',
                                        'aria_valueMin' => 0,
                                        'aria_valueMax' => 100,
                                        'item_title_margin' => false,
                                        'progress_margin' => 'mb-g'
                                    ],
                                ];

                                foreach ($tasks as $task) {
                                        
                                    $item_title_margin = '';
                                        
                                    if ($task['item_title_margin']) {
                                        $item_title_margin = $task['item_title_margin'];
                                    }
                                    
                                    $progress_margin = '';
                                        
                                    if ($task['progress_margin'] == 'mb-3') {
                                        $progress_margin = 'mb-3';
                                    } else {
                                        $progress_margin = 'mb-g';
                                    }

                                    echo '<div class="d-flex ' . $item_title_margin . '">';
                                        echo $task['title'];
                                        echo '<span class="d-inline-block ml-auto">' . $task['progress'] . '</span>';
                                    echo '</div>';
                                    echo '<div class="progress progress-sm ' . $progress_margin . '">';
                                        echo '<div 
                                            class="progress-bar bg-' . $task['bg'] . '" 
                                            role="progressbar" 
                                            style="width: ' . $task['style_width'] . ';" 
                                            aria-valuenow="' . $task['aria_valueNow'] . '" 
                                            aria-valuemin="' . $task['aria_valueMin'] . '" 
                                            aria-valuemax="' . $task['aria_valueMax'] . '">
                                        </div>';
                                    echo '</div>';

                                }
                            ?>
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
