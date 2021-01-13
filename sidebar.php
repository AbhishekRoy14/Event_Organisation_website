<!-- ADMIN SIDEBAR -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin </div>
      <ul class="list-group list-group-flush">
	  <li>
	  <a href="admin.php" class="list-group-item list-group-item-action bg-light" >Dashboard<span class="sr-only">(current)</span></a>
	  </li>
      <li>
	  <a href="a_menu.php" class="list-group-item list-group-item-action bg-light">Menu</a>
	  </li>
	  <li>
	  <a href="a_category.php" class="list-group-item list-group-item-action bg-light">Category</a>
	  </li>
		<li>
        <a href="#homeSubmenu" class="dropdown-toggle list-group-item list-group-item-action bg-light" data-toggle="collapse" aria-expanded="false">Reservation</a>
		   <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li >
                            <a href="a_pending_reservation.php" class="list-group-item list-group-item-action bg-light" aria-expanded="false">Pending Reservation</a>
                        </li>
						 <li>
                            <a href="a_confirm_reservation.php" class="list-group-item list-group-item-action bg-light" aria-expanded="false">Confirmed Reservation</a>
                        </li>
						 <li>
                            <a href="a_finish_reservation.php" class="list-group-item list-group-item-action bg-light" aria-expanded="false">Finished Reservation</a>
                        </li>
                         <li>
                            <a href="a_cancel_reservation.php" class="list-group-item list-group-item-action bg-light" aria-expanded="false">Cancelled Reservation</a>
                        </li>
           </ul>
		</li>
		<li>
		<a href="a_members.php" class="list-group-item list-group-item-action bg-light">Members</a>
		</li>
		<li>
		<a href="a_messages.php" class="list-group-item list-group-item-action bg-light">Messages</a>
		</li>
		<li>
		<a href="a_user.php" class="list-group-item list-group-item-action bg-light">User</a>
		</li>
      </ul>
    </div>