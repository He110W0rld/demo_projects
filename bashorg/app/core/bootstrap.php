<?php

include "model.php";
include __DIR__ ."/../models/BashModel.php";

include "view.php";
include "controller.php";

include __DIR__ ."/../controllers/BashController.php";
include "route.php";

Route::start();