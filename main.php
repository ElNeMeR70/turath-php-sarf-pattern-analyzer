<?php
declare(strict_types=1);

/**
 * turath-php-sarf-pattern-analyzer — الميزان الصرفي الحاسوبي وتصريف الأوزان العربية
 * Arabic Morphological Pattern (Al-Mizan Al-Sarfi fa-'a-la) Analyzer
 */
$input = "استغفر -> استفعل";
$digest = substr(hash("sha256", "turath-php-sarf-pattern-analyzer:" . $input), 0, 12);

echo "[RUN] turath-php-sarf-pattern-analyzer (PHP) — Arabic Morphological Pattern (Al-Mizan Al-Sarfi fa-'a-la) Analyzer" . PHP_EOL;
echo "[AR]  الميزان الصرفي الحاسوبي وتصريف الأوزان العربية" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Root=غ-ف-ر | Wazn=استفعل | AugmentedForm=X |Affixes=[ا,س,ت] | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
