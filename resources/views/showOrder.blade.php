<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taco Tracker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h2> Taco Tracker </h2>
        <h2> Date: </h2>
        <div class="row">
            <div class="col-sm-6">
                <h3>Burrito (Regular $5.15, Super $ 5.75)</h3>
                <h3>Quesadilla ($5.50)</h3> 
                <h3>Taco ($1.50)</h3> 
            </div>
            <div class="col-sm-6">
                <h3>Carne Asada</h3>
                <h3>Pollo</h3>
                <h3>Lengua</h3>
                <h3>Carnitas</h3>
                <h3>Veggie</h3>
                <h3>Al Pastor</h3>    
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-3">
                <label> Name</label>
                <div class="row">
                </div>
            </div>
            <div class="col-sm-3">
                <label> Order</label>
                <div class="row">

                </div>                
            </div>
            <div class="col-sm-3">
                <label> Price</label>
                <div class="row">

                </div>
            </div>
            <div class="col-sm-3">
                <label> Add/Delete</label>
                <div class="row">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addModal">Add</button> 
                    <button type="button" class="btn btn-info btn-sm">Delete</button>
                </div>
            </div>
        </div>

        <!-- Modal -->
    <div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Place Order</h4>
              </div>
              <div class="modal-body">
                <form>
                    <div class=-"form-group">
                        <label for="amount">Name</label>
                        <input type="name" class="form-control"></input>
                    </div>
                    <div class=-"form-group">
                        <label for="amount">Amount</label>
                        <select for="amountOption" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>        
                        </select>
                    </div>
                    <div class=-"form-group">
                        <label for="meat">Meat</label>
                        <select for="meatOption" class="form-control">
                            <option>Carne Asada</option>
                            <option>Pollo</option>
                            <option>Al Pastor</option>
                            <option>Carnitas</option>
                            <option>Veggie</option>
                            <option>Lengua</option>
                        </select>
                    </div>
                    <div class=-"form-group">
                        <label>Type</label>
                        <select for="typeOption" class="form-control">
                            <option>Burrito (Regular)</option>
                            <option>Burrito (Super)</option>
                            <option>Taco</option>
                            <option>Quesadilla</option>
                        </select>
                    </div>    
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>
    </body>
</html>
