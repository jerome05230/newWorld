#ifndef MAINWINDOWCONTROLEUR_H
#define MAINWINDOWCONTROLEUR_H

#include <QMainWindow>
#include <QMessageBox>

namespace Ui {
class MainWindowControleur;
}

class MainWindowControleur : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindowControleur(QWidget *parent = 0);
    ~MainWindowControleur();

private slots:
    void on_actionQuit_triggered();

private:
    Ui::MainWindowControleur *ui;
};

#endif // MAINWINDOWCONTROLEUR_H
