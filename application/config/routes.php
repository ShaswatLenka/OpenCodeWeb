<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = 'Opencode';
$route['home'] = 'Opencode/home';
$route['about'] = 'Opencode/about';
$route['team'] = 'Opencode/team';
$route['projects'] = 'Opencode/projects';
$route['start_project'] = 'Opencode/start_project';
$route['user/account'] = 'Opencode/account';
$route['user/login'] = 'Opencode/login';
$route['user/registration'] = 'Opencode/registration';
$route['user/logout'] = 'Opencode/logout';
$route['user/emailChecking'] = 'Opencode/email_check';

$route['upload/image'] = 'upload';

$route['404_override'] = 'error';


/*********** ROUTES FOR ADMIN PANEL *******************/

$route['admin'] = 'login';

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';

$route['postListing'] = 'user/postListing';
$route['addNewPost'] = "user/addNewPost";
$route['addNewP'] = "user/addNewP";

//$route['postListing'] = 'post/postListing';
$route['postListing/(:num)'] = "user/postListing/$1";
//$route['addNewP'] = "post/addNewP";
//$route['addNewPost'] = "post/addNewPost";
$route['editOldP'] = "user/editOldP";
$route['editOldP/(:num)'] = "user/editOldP/$1";
$route['editPost'] = "user/editPost";
$route['deletePost'] = "user/deletePost";

$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

//$route['articleListing'] = 'user/articleListing';


/* End of file routes.php */
/* Location: ./application/config/routes.php */