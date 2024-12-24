import React from "react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Link } from "@inertiajs/react";

export default function Index({ products }) {
    return (
        <AuthenticatedLayout>
            <div className="max-w-7xl mx-auto p-6">
                <h1 className="text-6xl font-bold text-center text-gray-100 mb-9">
                    PhonShop
                </h1>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    {products.map((product) => (
                        <div
                            className="border rounded-lg shadow-md p-4 bg-white hover:shadow-lg transition-shadow"
                            key={product.id}
                        >
                            <img
                                src={product.img}
                                alt={product.name}
                                className="product-detail-image"
                            />{" "}
                            <h2 className="text-xl font-semibold text-gray-700 mb-2">
                                {product.name}
                            </h2>
                            <p className="text-gray-600 mb-4">
                                ${product.price.toFixed(2)}
                            </p>
                            <Link
                                href={`/products/${product.id}`}
                                className="inline-block px-4 py-2 bg-blue-600 text-white font-medium text-sm rounded-md hover:bg-blue-700 transition-colors"
                            >
                                View Details
                            </Link>
                        </div>
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
