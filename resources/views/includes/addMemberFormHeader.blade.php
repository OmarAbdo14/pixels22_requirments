<header class="position-relative">
    <nav style="background-color: #111a2f" class="navbar navbar-expand-lg navbar-dark py-3 position-fixed w-100">
        <div class="container-fluid">
            <img style="width: calc(20px + 3vw);resize: both" class="rounded-circle" src="{{asset('./images/logo.jpg')}}" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/members/all">All Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members/addMemberForm">Add Member</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w-50 mx-auto" draggable="false" style="padding-top: 120px">
        <img class="w-100 h-100" src="{{asset('./images/games.png')}}" />
    </div>
</header>
