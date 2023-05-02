<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230417112923 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY event_ibfk_1');
        $this->addSql('ALTER TABLE event CHANGE idCat idCat INT DEFAULT NULL');
        $this->addSql('DROP INDEX idcat ON event');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7BF165E2F ON event (idCat)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT event_ibfk_1 FOREIGN KEY (idCat) REFERENCES categorieevent (idCat)');
        $this->addSql('DROP INDEX `primary` ON reservation');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_2');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_1');
        $this->addSql('ALTER TABLE reservation CHANGE idRes IdRes INT AUTO_INCREMENT NOT NULL, CHANGE idEvent IdEvent INT DEFAULT NULL, CHANGE idUser IdUser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (IdRes)');
        $this->addSql('DROP INDEX idevent ON reservation');
        $this->addSql('CREATE INDEX IDX_42C84955E3D77026 ON reservation (IdEvent)');
        $this->addSql('DROP INDEX iduser ON reservation');
        $this->addSql('CREATE INDEX IDX_42C84955F9C28DE1 ON reservation (IdUser)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_2 FOREIGN KEY (idUser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_1 FOREIGN KEY (idEvent) REFERENCES event (idEvent)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7BF165E2F');
        $this->addSql('ALTER TABLE event CHANGE idCat idCat INT NOT NULL');
        $this->addSql('DROP INDEX idx_3bae0aa7bf165e2f ON event');
        $this->addSql('CREATE INDEX idCat ON event (idCat)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7BF165E2F FOREIGN KEY (idCat) REFERENCES categorieevent (idCat)');
        $this->addSql('ALTER TABLE reservation MODIFY IdRes INT NOT NULL');
        $this->addSql('ALTER TABLE reservation MODIFY IdRes INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON reservation');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955E3D77026');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955F9C28DE1');
        $this->addSql('ALTER TABLE reservation CHANGE IdRes idRes INT NOT NULL, CHANGE IdEvent idEvent INT NOT NULL, CHANGE IdUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (idRes, idEvent, idUser)');
        $this->addSql('DROP INDEX idx_42c84955e3d77026 ON reservation');
        $this->addSql('CREATE INDEX idEvent ON reservation (idEvent)');
        $this->addSql('DROP INDEX idx_42c84955f9c28de1 ON reservation');
        $this->addSql('CREATE INDEX idUser ON reservation (idUser)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E3D77026 FOREIGN KEY (IdEvent) REFERENCES event (IdEvent)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955F9C28DE1 FOREIGN KEY (IdUser) REFERENCES user (IdUser)');
    }
}
