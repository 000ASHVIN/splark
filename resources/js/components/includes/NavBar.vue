<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item">
                <router-link :to="{ name: 'contact' }" class="nav-link">Contact</router-link>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
            <div class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign In</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Get Started</button>
            </div>
            </div>
        </nav>
    </div>
</template>

<script>

export default {
    name: 'NavBar'
}
</script>
