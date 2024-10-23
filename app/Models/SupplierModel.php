<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class SupplierModel extends Model
{
    use HasFactory;
    protected $table = 'm_supplier'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'supplier_id'; // Mendefinisikan primary key dari tabel yang digunakan
    protected $fillable = ['supplier_kode','supplier_nama', 'supplier_alamat'];

    public function barang():HasMany
    {
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }
    public function stok():HasMany
    {
        return $this->hasMany(StokModel::class, 'stok_id', 'stok_id');
    }

}