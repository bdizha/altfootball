<template>
    <form class="register" method="post" action="/user/addUser">
        <div class="form-group">
            <label for="first_name">First Name</label> <br>
            <input type="text" name="first_name" class="form-control" value="{{ first_name }}">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label> <br>
            <input type="text" name="last_name" class="form-control" value="{{ last_name }}">
        </div>
        <div class="form-group">
            <label for="email_address">Email Address</label> <br>
            <input type="text" name="email_address" class="form-control" value="{{ email_address }}">
        </div>
        <div class="form-group">
            <label for="password">Password</label> <br>
            <input type="password" class="form-control" name="password" value="">
            <small>Minimum 8 characters; At least one letter and one number.</small>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label><br>
            <input type="password" class="form-control" name="confirm_password" value="">
        </div>

        <div class="form-group">
            <label for="tc">
                <input name="tc" id="tc" type="checkbox" required="">
                <span>Accept </span><a href="/terms-and-conditions" target="_blank">Terms and Conditions</a>
            </label>
        </div>

        <div class="form-group">
            <label for="cookies">
                <input name="cookies" id="cookies" type="checkbox" required="">
                <span>Accept </span><a href="/cookies" target="_blank">Cookies Policy</a>
            </label>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xs-6">
                <input class="btn btn-default" type="submit" value="Register">
            </div>
            <div class="col-sm-6 col-xs-6">
                <a class="btn-height" href="http://tpc.henley.ch">Cancel</a>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data () {
            return {
                first_name: 'Batanayi',
                last_name: 'Matuku',
                email_address: 'bdizha@gmail.com'
            };
        }
    }
</script>