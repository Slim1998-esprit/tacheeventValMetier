<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230417113143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX idUser ON reservation');
        $this->addSql('DROP INDEX idEvent ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE idRes IdRes INT AUTO_INCREMENT NOT NULL, CHANGE idEvent IdEvent VARCHAR(255) NOT NULL, CHANGE idUser IdUser VARCHAR(255) NOT NULL, ADD PRIMARY KEY (IdRes)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation MODIFY IdRes INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON reservation');
        $this->addSql('ALTER TABLE reservation CHANGE IdRes idRes INT NOT NULL, CHANGE IdEvent idEvent INT NOT NULL, CHANGE IdUser idUser INT NOT NULL');
        $this->addSql('CREATE INDEX idUser ON reservation (idUser)');
        $this->addSql('CREATE INDEX idEvent ON reservation (idEvent)');
    }
}
