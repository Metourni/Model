<?php
/**
 * Created by PhpStorm.
 * User: Noureddine
 * Date: 30/04/2017
 * Time: 23:56
 */?>
<div class="list-group">
    <button type="button" class="list-group-item active" href="profile.html">
        Publication
    </button>
    <button type="button" class="list-group-item">
        Profile
    </button>
    <button type="button" class="list-group-item" id="right-menu-project-btn" onclick="setProjectNotificationZero()">
        <span class="badge projectNotification">0</span>
        Project
    </button>
    <button type="button" class="list-group-item" id="right-menu-event-btn" onclick="setEventNotificationZero()">
        <span class="badge eventNotification">0</span>
        Events
    </button>
    <button type="button" class="list-group-item">
        Guide
    </button>
</div>
