<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.kpi.main_country' shared service.

return $this->services['prestashop.adapter.kpi.main_country'] = new \PrestaShop\PrestaShop\Adapter\Kpi\MainCountryKpi(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.kpi_configuration']) ? $this->services['prestashop.adapter.legacy.kpi_configuration'] : ($this->services['prestashop.adapter.legacy.kpi_configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : ($this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext())) && false ?: '_'}->getAdminLink("AdminStats", true, ["ajax" => 1, "action" => "getKpi", "kpi" => "main_country"]));
