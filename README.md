<h2>#About:</h2>

This is open source Magento 2.x module, feel free to contribute: https://github.com/Eudemon/magento2_auto_import

auto create or update catalog product using cron job based on user configuration <br />
comes with own cron group, log file `/var/log/Auto_Import.log` <br />
Support translations

<h2>#Instruction:</h2>

clone to `app/code/Randy/AutoImport`

import setting and location in `Store -> Configuration -> Catalog -> AutoImport -> Setting` <br />
two modes: `create and update` (create the catalog product if does not exist, otherwise update attribute) or `update` 

setting for match attributes in `Store -> Configuration -> Catalog -> AutoImport -> Attribute` <br />
Note that in `create` mode some attributes are required to be filled for auto create product
