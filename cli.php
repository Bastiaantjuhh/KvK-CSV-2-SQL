<?php
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config.php";

$cli = new League\CLImate\CLImate;
$csv = new \ParseCsv\Csv();
$database = new Nette\Database\Connection("mysql:host=". $configMysqlHost .";dbname=" . $configMysqlDB, $configMysqlUser, $configMysqlPass);

$padding = $cli->padding(40);

$cli->green("██╗  ██╗██╗   ██╗██╗  ██╗     ██████╗ ██████╗ ███████╗███╗   ██╗    ██████╗  █████╗ ████████╗ █████╗");
$cli->green("██║ ██╔╝██║   ██║██║ ██╔╝    ██╔═══██╗██╔══██╗██╔════╝████╗  ██║    ██╔══██╗██╔══██╗╚══██╔══╝██╔══██╗");
$cli->green("█████╔╝ ██║   ██║█████╔╝     ██║   ██║██████╔╝█████╗  ██╔██╗ ██║    ██║  ██║███████║   ██║   ███████║");
$cli->green("██╔═██╗ ╚██╗ ██╔╝██╔═██╗     ██║   ██║██╔═══╝ ██╔══╝  ██║╚██╗██║    ██║  ██║██╔══██║   ██║   ██╔══██║");
$cli->green("██║  ██╗ ╚████╔╝ ██║  ██╗    ╚██████╔╝██║     ███████╗██║ ╚████║    ██████╔╝██║  ██║   ██║   ██║  ██║");
$cli->green("╚═╝  ╚═╝  ╚═══╝  ╚═╝  ╚═╝     ╚═════╝ ╚═╝     ╚══════╝╚═╝  ╚═══╝    ╚═════╝ ╚═╝  ╚═╝   ╚═╝   ╚═╝  ╚═╝");
$cli->br();

$timeStart = microtime(true); 

foreach (glob("./data_split/*") as $file) { 

    echo $padding->label($file)->result("[<yellow>LOADING</yellow>]");
    $csv->auto($file);

    foreach($csv->data as $value) {

        $database->query("INSERT INTO kvk_data ?", [
            "woonplaats" => htmlspecialchars($value["Woonplaats"]),
            "indicatie_hoofdvestiging" => htmlspecialchars($value["Indicatie Hoofdvestiging"]),
            "rechtsvorm" => htmlspecialchars($value["Rechtsvorm"]),
            "rechtsvorm_omschrijving" => htmlspecialchars($value["Rechtsvorm omschrijving"]),
            "sbi" => htmlspecialchars($value["Hoofdactiviteit"]),
            "sbi_omschrijving" => htmlspecialchars($value["Omschrijving hoofdactiviteit"]),
            "sbi_na" => htmlspecialchars($value["Nevenactiviteit 1"]),
            "sbi_na_omschrijving" => htmlspecialchars($value["Omschrijving nevenactiviteit 1"]),
            "sbi_na2" => htmlspecialchars($value["Nevenactiviteit 2"]),
            "sbi_na2_omschrijving" => htmlspecialchars($value["Omschrijving nevenactiviteit 2"]),
            "import" => htmlspecialchars($value["Import"]),
            "export" => htmlspecialchars($value["Export"]),
            "datum_oprichting" => htmlspecialchars($value["Datum oprichting"]),
            "datum_akte_oprichting" => htmlspecialchars($value["Datum akte oprichting"]),
            "datum_inschrijving" => htmlspecialchars($value["Datum Inschrijving"]),
            "datum_vestiging" => htmlspecialchars($value["Datum vestiging"]),
            "datum_vestiging_huidig" => htmlspecialchars($value["Datum vestiging huidig adres"]),
            "datum_opheffing" => htmlspecialchars($value["Datum opheffing"]),
            "datum_voortzetting" => htmlspecialchars($value["Datum voortzetting"]),
            "indicator_surseance" => htmlspecialchars($value["Indicator surseance - faillissement - schuldsanering"]),
            "boekjaar" => htmlspecialchars($value["boekjaar"]),
            "deponering_jaarstuk" => htmlspecialchars($value["Datum deponering jaarstuk"]),
        ]);
    }

    echo $padding->label($file)->result("[<green>DONE</green>]");
}

$timeEnd = microtime(true);

$cli->br();
$cli->out("All data is proceed");
$cli->br();