<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.language.pack.importer' shared service.

return $this->services['prestashop.adapter.language.pack.importer'] = new \PrestaShop\PrestaShop\Adapter\Language\Pack\LanguagePackImporter(${($_ = isset($this->services['prestashop.adapter.language.language_pack_installer']) ? $this->services['prestashop.adapter.language.language_pack_installer'] : $this->load('getPrestashop_Adapter_Language_LanguagePackInstallerService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.language']) ? $this->services['prestashop.adapter.data_provider.language'] : ($this->services['prestashop.adapter.data_provider.language'] = new \PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.cache_clearer']) ? $this->services['prestashop.adapter.cache_clearer'] : ($this->services['prestashop.adapter.cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\CacheClearer())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("_PS_TRANSLATIONS_DIR_"));