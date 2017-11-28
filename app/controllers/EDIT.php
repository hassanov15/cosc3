<?php 

  if($_POST['submit']) {
    echo "Form was submitted.";
    $new_display_name = $sanitizer->text($input->post->displayname);
   $this->view('home/Update');
  }

  // Make sure the user has permission before showing the page to edit.
  if($user->hasPermission("edit_content")) {

    $edit_page = $input->urlSegment1;
     $this->view('home/');

    // The user is trying to edit their profile.
    if($edit_page == "profile") {
      if($user->name == $input->urlSegment2 or $user->isSuperuser()){

        $user_display_name = $user->user_display_name;
        
         $this->view('home/Update');
