<li class="nav-item dropdown me-3">
    <a class="nav-link nav-icon btn btn-outline-light" data-bs-toggle="dropdown">
        <i class="bi bi-person-check"></i>
        <span id="online-users-badge" class="badge bg-success badge-number" style="<?php echo count($online_users) <= 1 ? 'display:none;' : ''; ?>"><?php echo count($online_users); ?></span>
    </a>
    <ul id="online-users-list" class="dropdown-menu dropdown-menu-end dropdown-menu-arrow online-users overflow-auto" style="max-height: 500px;">
        <?php foreach ($online_users as $_user): ?>
            <li class="online-user-item position-relative">
                <img width="50px" height="50px" src="<?php echo $_user->profileImage; ?>" class="rounded-circle">
                <div class="ps-2">
                    <h4><?php echo $_user->fullname; ?></h4>
                    <p>
                        <i class="bi bi-circle-fill text-success m-0" style="font-size: 12px;"></i>
                        <span><?php echo date('H:i', $_user->last_activity_time); ?></span>
                    </p>
                </div>
                <?php echo ModalPage::link('', Url::to(['/system/user/view', 'id' => $_user->id]), ['class' => 'stretched-link']); ?>
            </li>
        <?php endforeach; ?>
        <?php if (!empty($users) && !empty($online_users)): ?>
            <hr>
        <?php endif; ?>
        <?php foreach ($users as $_user): ?>
            <li class="online-user-item position-relative">
                <img width="50px" height="50px" src="<?php echo $_user->profileImage; ?>" class="rounded-circle">
                <div class="ps-2">
                    <h4><?php echo $_user->fullname; ?></h4>
                    <p>
                        <i class="bi bi-circle-fill text-secondary m-0" style="font-size: 12px;"></i>
                        <?php if ($_user->last_activity_time != null): ?>
                            <span><?php echo date('H:i', $_user->last_activity_time); ?></span>
                        <?php endif; ?>
                    </p>
                </div>
                <?php echo ModalPage::link('', Url::to(['/system/user/view', 'id' => $_user->id]), ['class' => 'stretched-link']); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</li>