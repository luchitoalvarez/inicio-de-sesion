import javax.swing.*;
import java.awt.event.*;

public class Botoncito extends JFrame implements ActionListener{
  JButton boton1;
  public Botoncito(){
   setLayout(null);
   boton1 = new JButton("Cerrar");
   boton1.setBounds(300,250,100,30);
   add(boton1);
   boton1.addActionListener(this);
 }

 public void actionPerformed(ActionEvent i){
   if(i.getSource() == boton1){
     System.exit(0);
   }
 }

  public static void main(String args[]){
   Botoncito formulario1 = new Botoncito();
   formulario1.setBounds(0,0,450,350);
   formulario1.setVisible(true);
   formulario1.setResizable(false);
   formulario1.setLocationRelativeTo(null);
 }
}