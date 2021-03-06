<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190410165560 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Content migration';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO fos_user_user (username, username_canonical, email, email_canonical, enabled, salt, password, roles, created_at, updated_at) VALUES ('admin', 'admin', 'admin@symfony.local', 'runroom@runroom.com', 1, 'Jm20EnPsPVdrPG.6l.U5IOdYOZWSirX3r40pw4kpAko', '\$argon2id\$v=19\$m=65536,t=4,p=1\$yszqXGIYre2ajyy65+qlkw\$DYsEDLsYoNAw4c4zlcZHmZ8dUEvKQvLnOVn40oYqWlM', 'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}', '2018-01-08 09:56:07', '2018-01-08 09:56:07')");

        $this->addSql("INSERT INTO meta_information (id, route_name, route) values (1, 'Default', 'default')");
        $this->addSql("INSERT INTO meta_information (id, route_name, route) values (2, 'Not found', '')");
        $this->addSql("INSERT INTO meta_information (id, route_name, route) values (3, 'Static page', 'runroom.static_page.route.static')");
        $this->addSql("INSERT INTO meta_information (id, route_name, route) values (4, 'Cookies page', 'runroom.cookies.route.cookies')");

        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (1, 'Archetype Symfony', 'Archetype to start our projects', 'en')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (1, 'Arquetipo de Symfony', 'Arquetipo para empezar nuestros proyectos', 'es')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (1, 'Arquetip de Symfony', 'Arquetip per començar els nostres projectes', 'ca')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (2, '404 | Archetype Symfony', 'Page not found', 'en')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (2, '404 | Arquetipo de Symfony', 'Página no encontrada', 'es')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (2, '404 | Arquetip de Symfony', 'Pàgina no trobada', 'ca')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (3, '{title} | Archetype Symfony', '{content}', 'en')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (3, '{title} | Arquetipo de Symfony', '{content}', 'es')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (3, '{title} | Arquetip de Symfony', '{content}', 'ca')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (4, 'Cookies | Archetype Symfony', 'Cookies settings', 'en')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (4, 'Cookies | Arquetipo de Symfony', 'Configuración de cookies', 'es')");
        $this->addSql("INSERT INTO meta_information_translation (translatable_id, title, description, locale) values (4, 'Cookies | Arquetip de Symfony', 'Configuració de cookies', 'ca')");

        $this->addSql("INSERT INTO translation (id, translation_key) VALUES (1, 'site_name')");
        $this->addSql("INSERT INTO translation (id, translation_key) VALUES (2, 'twitter_name')");
        $this->addSql("INSERT INTO translation (id, translation_key) VALUES (3, 'privacy_url')");

        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (1, 'Arquetipo Symfony', 'es')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (1, 'Archetype Symfony', 'en')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (1, 'Arquetip Symfony', 'ca')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (2, '@symfony', 'es')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (2, '@symfony', 'en')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (2, '@symfony', 'ca')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (3, '/politica-de-privacidad', 'es')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (3, '/politica-de-privacitat', 'ca')");
        $this->addSql("INSERT INTO translation_translation (translatable_id, value, locale) VALUES (3, '/privacy-policy', 'en')");

        $this->addSql("INSERT INTO static_page (id, meta_information_id, location, publish) VALUES (1, NULL, 'footer', 1)");

        $this->addSql("INSERT INTO static_page_translation (translatable_id, title, slug, content, locale) VALUES (1, 'Política de privacidad', 'politica-de-privacidad', 'Política de privacidad', 'es')");
        $this->addSql("INSERT INTO static_page_translation (translatable_id, title, slug, content, locale) VALUES (1, 'Política de privacitat', 'politica-de-privacitat', 'Política de privacitat', 'ca')");
        $this->addSql("INSERT INTO static_page_translation (translatable_id, title, slug, content, locale) VALUES (1, 'Privacy policy', 'privacy-policy', 'Privacy Policy', 'en')");

        $this->addSql('INSERT INTO cookies_page (id) VALUES (1)');

        $this->addSql("INSERT INTO cookies_page_translation (translatable_id, title, content, locale) VALUES (1, 'Cookie Policy', 'Cookies content', 'en')");
        $this->addSql("INSERT INTO cookies_page_translation (translatable_id, title, content, locale) VALUES (1, 'Política de cookies', 'Cookies content', 'es')");
        $this->addSql("INSERT INTO cookies_page_translation (translatable_id, title, content, locale) VALUES (1, 'Política de cookies', 'Cookies content', 'ca')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM cookies_page_translation');
        $this->addSql('DELETE FROM cookies_page');
        $this->addSql('DELETE FROM static_page_translation');
        $this->addSql('DELETE FROM static_page');
        $this->addSql('DELETE FROM translation_translation');
        $this->addSql('DELETE FROM translation');
        $this->addSql('DELETE FROM meta_information_translation');
        $this->addSql('DELETE FROM meta_information');
        $this->addSql('DELETE FROM fos_user_user');
    }
}
