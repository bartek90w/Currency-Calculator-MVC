<?php
class view
{
    private $name;
    private $header;
    private $contents;

    public function __construct($name="Przelicznik walut", $header="Przelicznik walut", $contents="<b>Wybierz walutę bazową:</b>")
    {
        $this->name = $name;
        $this->header = $header;
        $this->contents = $contents;
        $this->makeSite();

    }
    public function showTable($model)
    {
        echo "<b>Kursy z dnia: </b>" . $model->date . "<br/><br/>";
        ?> <table border="1">
        <th>Waluta</th><th>Wartość</th> <?php
        foreach($model->rates as $key => $value)
        {
            echo  "<tr><td width='50'>".$key . "</td><td> " .$value . "</td>";
        }
        ?> </table> <?php
    }
    private function makeSite()
    {
        ?>
        <html>
        <head>
            <title><?php echo $this->name; ?></title>
        </head>
        <body>
        <h1 style="color:darkred;"><?php echo $this->header; ?></h1>
        <p> <?php echo $this->contents; ?></p>
        <form action="" method="post">
            <input type="text" name="base"/>
            <input type="submit" value="Sprawdź"/>
        </form>
        </body>
        </html>
        <?php
    }


}